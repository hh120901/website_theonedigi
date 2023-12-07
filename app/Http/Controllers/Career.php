<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\MailDB;
use App\Models\Setting;
use App\Mail\CareerApply;
use App\Mail\ConfirmApply;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Career extends Controller
{
	//
	public function career_details(Request $request, $category = null, $id=null) 
	{
		if (!empty($category)) {
			$careerCate = PostCategory::where('alias', $category)->where('active', 1)->first();
			if (!empty($careerCate) && !empty($id)) {
				$post = Post::where('category_id', $careerCate->id)->where('id', $id)->where('active', 1)->first();
				if (!empty($post)) {
					return view('sections.career_detail')->with('post', $post);
				}
			}
		}
		return redirect(url('/career'));
	}

	public function apply_form(Request $request)
	{
		$settings = Setting::first();
		if ($request->isMethod('post')) {
			if (!empty($request->input('candidate_email'))) {
				$request->validate(array(
					'candidate_name' => 'required|string|max:255',
					'candidate_email' => 'required|string|email|max:255',
					'candidate_phone' => 'required|string|max:20',
					'input_file' => 'required|file|mimes:pdf|max:2048'
				));

				if ($request->hasFile('input_file')) {
					if ($request->file('input_file')->isValid()) {
						$directory = 'career/'.$request->input('job_id');
						$filename = time();
						$filename .= $request->file('input_file')->getClientOriginalName();
						$path = $request->file('input_file')->storeAs($directory, $filename, 'public');
					}
				}
				
				$mail = new \stdClass();
				$mail->sender = $request->input('candidate_email');
				$mail->name = $request->input('candidate_name');
				$mail->phone = $request->input('candidate_phone');
				$mail->receiver = $settings->company_email;
				$mail->attachment = $path;
				$mail->type = 'career';
				$mail->job_id = $request->input('job_id');
				$mail = MailDB::create((array)$mail);

				$data = array(
					'bcc'=> [$settings->hr_email],
					'sender' => $request->input('candidate_email'),
					'receivers' => $settings->company_email,
					'subjects' => '[CAREER APPLYCANT] '.$request->input('job_name').' - '.$request->input('candidate_name'),
					'attachmentPath' => $path,
					'tpl_data'	=> $mail,
				);
				
				Mail::send(new CareerApply((object) $data));

				$data['sender'] = $settings->hr_email;
				$data['receivers'] = $request->input('candidate_email');
				
				Mail::send(new ConfirmApply((object) $data));

				return redirect()->back()->with(['success' => 'Sent Email Successfully!']);
			}
		}
	}
}
