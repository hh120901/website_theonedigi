<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function about_details(Request $request, $id=null) {
		if (!empty($id)) {
			$aboutCate = PostCategory::where('alias', PostCategory::ABOUT_CATEGORY)->first();
			$post = Post::where('category_id', $aboutCate->id)->where('id', $id)->where('active', 1)->first();
			if (!empty($post)) {
				return view('sections.about_detail')->with('post', $post);
			}
		}
		return redirect(url('/about'));
    }
}
