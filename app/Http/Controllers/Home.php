<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Home extends Controller
{
	//
	public function index() {
		return view('fullpage');
	}
}
