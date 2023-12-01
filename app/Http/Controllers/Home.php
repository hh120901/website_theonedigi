<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Home extends Controller
{
	//
	public function index() {
		$aboutCate = PostCategory::where('alias', PostCategory::ABOUT_CATEGORY)->first();
		$about_posts = Post::where('category_id', $aboutCate->id)->where('active', 1)->get();
		return view('fullpage')->with('about_posts', $about_posts);
	}
}
