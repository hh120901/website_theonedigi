<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Career extends Controller
{
    //
    public function career_details(Request $request, $category = null, $id=null) {
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
}
