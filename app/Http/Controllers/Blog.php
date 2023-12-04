<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Blog extends Controller
{
    //
    public function blog_details(Request $request, $category = null, $id=null) {
		if (!empty($category)) {
		    $blogsCate = PostCategory::where('alias', $category)->where('active', 1)->first();
            if (!empty($blogsCate) && !empty($id)) {
                $post = Post::where('category_id', $blogsCate->id)->where('id', $id)->where('active', 1)->first();
                if (!empty($post)) {
                    return view('sections.blog_detail')->with('post', $post);
                }
            }
		}
		return redirect(url('/blogs'));
    }
}
