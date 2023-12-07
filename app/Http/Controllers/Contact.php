<?php

namespace App\Http\Controllers;

use App\Models\MailDB;
use App\Models\Setting;
use App\Mail\ContactMail;
use App\Mail\ConfirmContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
	public function index(Request $request) {
		$settings = Setting::first();
		if ($request->isMethod('post')) {
			$request->validate(array(
				'contact_name' => 'required|string|max:255',
				'contact_email' => 'required|string|email|max:255',
				'contact_phone' => 'required|string|max:20',
				'contact_message' => 'required|string',
			));

			$mail = new \stdClass();
			$mail->sender = $request->input('contact_email');
			$mail->receiver = $settings->company_email;
			$mail->name = $request->input('contact_name');
			$mail->phone = $request->input('contact_phone');
			$mail->type = 'contact';
			$mail->message = $request->input('contact_message');
			$mail = MailDB::create((array)$mail);

			$data = array(
				'sender' => $request->input('contact_email'),
				'receivers' => $settings->company_email,
				'bcc'=> [$settings->cs_email],
				'subject' => '[TODC Contact] - '.$request->input('contact_name'),
				'tpl_data'	=> $mail,
			);

			Mail::send(new ContactMail((object) $data));

			$data['sender'] = $settings->cs_email;
			$data['receivers'] = $request->input('contact_email');

			Mail::send(new ConfirmContact((object) $data));

			return redirect()->back()->with(['success' => 'Sent Email Successfully!']);
		}
	}
}
