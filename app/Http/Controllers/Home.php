<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class Home extends Controller
{
	public function index() {
		// get Category
		$aboutCate = PostCategory::where('alias', PostCategory::ABOUT_CATEGORY)->first();
		$productCate = PostCategory::where('alias', PostCategory::PRODUCTS_CATEGORY)->first();
		$teamCate = PostCategory::where('alias', PostCategory::TEAMS_CATEGORY)->first();
		$blogsCate = PostCategory::where('alias', PostCategory::BLOGS_CATEGORY)->first();
		$blogChild = PostCategory::where('parent_id', $blogsCate->id)->get();
		$careerCate = PostCategory::where('alias', PostCategory::CAREER_CATEGORY)->first();
		$careerChild = PostCategory::where('parent_id', $careerCate->id)->get();
		// get post
		$about_posts = Post::where('category_id', $aboutCate->id)->where('active', 1)->get();
		$product_posts = Post::where('category_id', $productCate->id)->where('active', 1)->get();
		$team_posts = Post::where('category_id', $teamCate->id)->where('active', 1)->get();
		
		return view('fullpage')->with('about_posts', $about_posts)
								->with('product_posts', $product_posts)
								->with('blogChild', $blogChild)
								->with('careerChild', $careerChild)
								->with('team_posts', $team_posts);
	}
}
