<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function product_details(Request $request, $id=null) {
		if (!empty($id)) {
            $productCate = PostCategory::where('alias', PostCategory::PRODUCTS_CATEGORY)->first();
			$post = Post::where('category_id', $productCate->id)->where('id', $id)->where('active', 1)->first();
            if (!empty($post)) {
                return view('sections.products_detail')->with('post', $post);
			}
		}
		return redirect(url('/products'));
    }
}
