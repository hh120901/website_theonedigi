<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Syslog extends Controller
{
	protected $breadcrumb = array();

	public function __construct()
	{
		// Admin auth
		$this->middleware(function ($request, $next) {
			if (!in_array($request->route()->getName(), array('syslog.login'))) {
				if (!Auth::check() || !in_array(Auth::user()->role_id, User::ADMIN_GROUP)) {
					return redirect()->route('syslog.login');
				}
				Auth::user()->last_activity = date('Y-m-d H:i:s');
				Auth::user()->save();
			}
			return $next($request);
		});
		
		//$this->breadcrumb = array_merge($this->breadcrumb, array('Syslog' => url(route('syslog'))));
	}
	
	public function login(Request $request, Client $client)
	{
		if ($request->isMethod('post')) {
			$request->validate(array(
				'email' => 'required|string|email',
				'password' => 'required|string'
			));
			
			$credentials = $request->only('email', 'password');
			$credentials['active'] = 1;
			if (Auth::attempt($credentials)) {
				return redirect()->route('syslog');
			}
			
			return back()->withErrors(['message' => 'You have entered invalid email or password.']);
		}
		
		return view('admin.login');
	}

	public function logout() {
		Auth::logout();
		return redirect()->route('syslog.login');
	}

	public function index() {
		return view('admin.dashboard');
	}

	public function users(Request $request, Client $client, $action='index', $id=null)
	{
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (empty($id)) {
					$request->validate(array(
						'email' => 'required|string|email|max:255|unique:user,email',
					));
				}
				if (in_array($task, array('save', 'save-edit'))) {
					$user = User::firstOrNew(['id' => $id]);
					$user->email = $request->input('email');

					$user->firstname = $request->input('firstname');
					$user->lastname = $request->input('lastname');
					$user->phone = $request->input('phone');
					$user->birthday = $request->input('birthday');
					$user->gender = $request->input('gender');
					$user->role_id = $request->input('role');
					$user->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->input('password') != $user->password) {
						$user->password = Hash::make($request->input('password'));
					}
					if ($request->hasFile('avatar')) {
						if ($request->file('avatar')->isValid()) {
							$directory = 'users/'.$user->id.'/avatar';
							Storage::disk('public')->deleteDirectory($directory);
							$user->avatar = $request->file('avatar')->store($directory, 'public');
						}
					}

					$user->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}
				
				return redirect()->route('syslog.users');
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$user = User::find($id);
					if ($task == 'orderup') {
						$user->decrement('order_num');
						$user->save();
					}
					else if ($task == 'orderdown') {
						$user->increment('order_num');
						$user->save();
					}
					else if ($task == 'delete') {
						$user->delete();
					}
				}
			}
		}
		
		if ($action == 'edit') {
			$user = User::firstOrNew(['id' => $id]);
			return view('admin.users.'.$action)
						->with('request', $request)
						->with('user', $user);
		}
		else {
			$users = User::where('firstname', 'like', '%'.$request->input('search_text').'%')
										->where('lastname', 'like', '%'.$request->input('search_text').'%')
										->orderBy('created_at')->paginate(10);
			return view('admin.users.'.$action)
						->with('request', $request)
						->with('users', $users);
		}
	}
	
	public function categories(Request $request, Client $client, $action='index', $id=null)
	{
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$category = PostCategory::firstOrNew(['id' => $id]);
					$category->name = $request->input('category_name');
					$category->alias = $request->input('alias');
					$category->parent_id = $request->input('parent_id') ?? null;
					$category->description = $request->input('description');
					$category->active = !empty($request->input('active')) ? 1 : 0;
					$category->save();

					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}
				
				return redirect()->route('syslog.categories');
			}
			//else {
			//	$ids = $request->input('cid', array());
			//	foreach ($ids as $id) {
			//		$category = PostCategory::find($id);
			//		if ($task == 'publish') {
			//			$category->active = 1;
			//			$category->save();
			//			$this->sitemap();
			//		}
			//		else if ($task == 'unpublish') {
			//			$category->active = 0;
			//			$category->save();
			//			$this->sitemap();
			//		}
			//		else if ($task == 'orderup') {
			//			$category->decrement('order_num');
			//			$category->save();
			//		}
			//		else if ($task == 'orderdown') {
			//			$category->increment('order_num');
			//			$category->save();
			//		}
			//		else if ($task == 'delete') {
			//			$category->delete();
			//			$this->sitemap();
			//		}
			//	}
			//}
		}
		
		if ($action == 'edit') {
			$category = PostCategory::firstOrNew(['id' => $id]);
			$categories = PostCategory::where('id', '<>', $category->id)->get();
			return view('admin.categories.'.$action)
						->with('request', $request)
						->with('category', $category)
						->with('categories', $categories);
		}
		else {
			$categories = PostCategory::where('name', 'like', '%'.$request->input('search_text').'%')
										->orderBy('created_at')->paginate(5);
			return view('admin.categories.'.$action)
						->with('request', $request)
						->with('categories', $categories);
		}
	}

	public function about(Request $request, Client $client, $action='index', $id=null)
	{
		$aboutCate = PostCategory::where('alias', PostCategory::ABOUT_CATEGORY)->first();
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$post = Post::firstOrNew(['id' => $id]);
					$post->user_id = Auth::user()->id;
					$post->title = $request->input('title');
					$post->description = $request->input('description');
					$post->category_id = $aboutCate->id;
					$post->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->hasFile('featured_image')) {
						if ($request->file('featured_image')->isValid()) {
							$directory = 'posts/'.$post->id.'/featured_image';
							Storage::disk('public')->deleteDirectory($directory);
							$post->featured_image = $request->file('featured_image')->store($directory, 'public');
						}
					}
					$post->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
					return redirect()->route('syslog.about')->with(['success' => 'Update Successfully!']);
				}
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$post = Post::find($id);
					if ($task == 'orderup') {
						$post->decrement('order_num');
						$post->save();
					}
					else if ($task == 'orderdown') {
						$post->increment('order_num');
						$post->save();
					}
					else if ($task == 'delete') {
						$post->delete();
					}
				}
			}
		}
		
		if ($action == 'edit') {
			$post = Post::firstOrNew(['id' => $id]);
			return view('admin.about.'.$action)
						->with('request', $request)
						->with('post', $post);
		}
		else {
			$posts = Post::where('category_id', $aboutCate->id)
									->where('title', 'like', '%'.$request->input('search_text').'%')
									->orderBy('created_at')->paginate(5);
			return view('admin.about.'.$action)
						->with('request', $request)
						->withMessage('alert error')
						->with('posts', $posts);
		}
	}

	public function products(Request $request, Client $client, $action='index', $id=null)
	{
		$productCate = PostCategory::where('alias', PostCategory::PRODUCTS_CATEGORY)->first();
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$post = Post::firstOrNew(['id' => $id]);
					$post->user_id = Auth::user()->id;
					$post->title = $request->input('title');
					$post->description = $request->input('description');
					$post->category_id = $productCate->id;
					$post->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->hasFile('featured_image')) {
						if ($request->file('featured_image')->isValid()) {
							$directory = 'posts/'.$post->id.'/featured_image';
							Storage::disk('public')->deleteDirectory($directory);
							$post->featured_image = $request->file('featured_image')->store($directory, 'public');
						}
					}
					$post->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}	
				return redirect()->route('syslog.products')->with(['success' => 'Update Successfully!']);;
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$post = Post::find($id);
					if ($task == 'orderup') {
						$post->decrement('order_num');
						$post->save();
					}
					else if ($task == 'orderdown') {
						$post->increment('order_num');
						$post->save();
					}
					else if ($task == 'delete') {
						$post->delete();
					}
				}
				return redirect()->route('syslog.products');
			}
		}
		
		if ($action == 'edit') {
			$post = Post::firstOrNew(['id' => $id]);
			return view('admin.products.'.$action)
						->with('request', $request)
						->with('post', $post);
		}
		else {
			$posts = Post::where('category_id', $productCate->id)
									->where('title', 'like', '%'.$request->input('search_text').'%')
									->orderBy('created_at')->paginate(5);
			return view('admin.products.'.$action)
						->with('request', $request)
						->with('posts', $posts);
		}
	}

	public function teams(Request $request, Client $client, $action='index', $id=null)
	{
		$teamCate = PostCategory::where('alias', PostCategory::TEAMS_CATEGORY)->first();
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$post = Post::firstOrNew(['id' => $id]);
					$post->user_id = Auth::user()->id;
					$post->title = $request->input('title');
					$post->name = $request->input('name');
					$post->cell_phone = $request->input('cell_phone');
					$post->office_phone = $request->input('office_phone');
					$post->fax = $request->input('fax');
					$post->description = $request->input('description');
					$post->category_id = $teamCate->id;
					$post->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->hasFile('featured_image')) {
						if ($request->file('featured_image')->isValid()) {
							$directory = 'posts/'.$post->id.'/featured_image';
							Storage::disk('public')->deleteDirectory($directory);
							$post->featured_image = $request->file('featured_image')->store($directory, 'public');
						}
					}
					$post->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}	
				return redirect()->route('syslog.teams')->with(['success' => 'Update Successfully!']);;
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$post = Post::find($id);
					if ($task == 'orderup') {
						$post->decrement('order_num');
						$post->save();
					}
					else if ($task == 'orderdown') {
						$post->increment('order_num');
						$post->save();
					}
					else if ($task == 'delete') {
						$post->delete();
					}
				}
				return redirect()->route('syslog.teams');
			}
		}
		
		if ($action == 'edit') {
			$post = Post::firstOrNew(['id' => $id]);
			return view('admin.teams.'.$action)
						->with('request', $request)
						->with('post', $post);
		}
		else {
			$posts = Post::where('category_id', $teamCate->id)
									->where('title', 'like', '%'.$request->input('search_text').'%')
									->orderBy('created_at')->paginate(5);
			return view('admin.teams.'.$action)
						->with('request', $request)
						->with('posts', $posts);
		}
	}

	public function blogs(Request $request, Client $client, $action='index', $id=null)
	{
		$blogsCate = PostCategory::where('alias', PostCategory::BLOGS_CATEGORY)->first();
		$blogChild = PostCategory::where('parent_id', $blogsCate->id)->get();
		$full_post = array();
		foreach ($blogChild as $key => $child) {
			$full_post[] = $child->posts;
		}
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$post = Post::firstOrNew(['id' => $id]);
					$post->user_id = Auth::user()->id;
					$post->title = $request->input('title');
					$post->category_id = $request->input('category');
					$post->description = $request->input('description');
					$post->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->hasFile('featured_image')) {
						if ($request->file('featured_image')->isValid()) {
							$directory = 'posts/'.$post->id.'/featured_image';
							Storage::disk('public')->deleteDirectory($directory);
							$post->featured_image = $request->file('featured_image')->store($directory, 'public');
						}
					}
					$post->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}	
				return redirect()->route('syslog.blogs')->with(['success' => 'Update Successfully!']);;
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$post = Post::find($id);
					if ($task == 'orderup') {
						$post->decrement('order_num');
						$post->save();
					}
					else if ($task == 'orderdown') {
						$post->increment('order_num');
						$post->save();
					}
					else if ($task == 'delete') {
						$post->delete();
					}
				}
				return redirect()->route('syslog.blogs');
			}
		}
		
		if ($action == 'edit') {
			$post = Post::firstOrNew(['id' => $id]);
			return view('admin.blogs.'.$action)
						->with('request', $request)
						->with('post', $post)
						->with('blogChild', $blogChild);
		}
		else {
			$parent_id = $blogsCate->id;
			$posts = Post::whereIn('category_id', function ($query) use ($parent_id) {
				$query->select('id')
					  ->from('post_category')
					  ->where('parent_id', $parent_id);
			})->orderBy('created_at')->paginate(5);
			return view('admin.blogs.'.$action)
						->with('request', $request)
						->with('blogChild', $blogChild)
						->with('posts', $posts);
		}
	}

	public function career(Request $request, Client $client, $action='index', $id=null)
	{
		$careerCate = PostCategory::where('alias', PostCategory::CAREER_CATEGORY)->first();
		$careerChild = PostCategory::where('parent_id', $careerCate->id)->get();
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			if ($action == 'edit') {
				if (in_array($task, array('save', 'save-edit'))) {
					$post = Post::firstOrNew(['id' => $id]);
					$post->user_id = Auth::user()->id;
					$post->title = $request->input('title');
					$post->category_id = $request->input('category');
					$post->description = $request->input('description');
					$post->active = !empty($request->input('active')) ? 1 : 0;

					if ($request->hasFile('featured_image')) {
						if ($request->file('featured_image')->isValid()) {
							$directory = 'posts/'.$post->id.'/featured_image';
							Storage::disk('public')->deleteDirectory($directory);
							$post->featured_image = $request->file('featured_image')->store($directory, 'public');
						}
					}
					$post->save();
					if ($task == 'save-edit') {
						return redirect(url()->current());
					}
				}	
				return redirect()->route('syslog.blogs')->with(['success' => 'Update Successfully!']);;
			}
			else {
				$ids = $request->input('cid', array());
				foreach ($ids as $id) {
					$post = Post::find($id);
					if ($task == 'orderup') {
						$post->decrement('order_num');
						$post->save();
					}
					else if ($task == 'orderdown') {
						$post->increment('order_num');
						$post->save();
					}
					else if ($task == 'delete') {
						$post->delete();
					}
				}
				return redirect()->route('syslog.career');
			}
		}
		
		if ($action == 'edit') {
			$post = Post::firstOrNew(['id' => $id]);
			return view('admin.career.'.$action)
						->with('request', $request)
						->with('post', $post)
						->with('careerChild', $careerChild);
		}
		else {
			$parent_id = $careerCate->id;
			$posts = Post::whereIn('category_id', function ($query) use ($parent_id) {
				$query->select('id')
					  ->from('post_category')
					  ->where('parent_id', $parent_id);
			})->orderBy('created_at')->paginate(5);
			return view('admin.career.'.$action)
						->with('request', $request)
						->with('careerChild', $careerChild)
						->with('posts', $posts);
		}
	}
}
