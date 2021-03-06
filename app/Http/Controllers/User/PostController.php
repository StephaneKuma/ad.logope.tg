<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Post displayed per page
     *
     * @var integer
     */
    private $per_page = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'user')->paginate($this->per_page);
        return view('users.posts/index', compact('posts'));
    }

    /**
     * Display a listing of the resource by category.
     *
     * @param string $slug
     * @return \Illuminate\http\Response
     */
    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = Post::with('category', 'user')->where('category_id', $category->id)->paginate($this->per_page);
        return view('users.posts/index', compact('posts', 'category'));
    }

    /**
     * Display a listing of the resource by user.
     *
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function user(int $id)
    {
        $user = User::find($id);
        $posts = Post::with('category', 'user')->where('user_id', $user->id)->paginate($this->per_page);
        return view('users.posts/index', compact('posts', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('users.posts/show', compact('post'));
    }
}
