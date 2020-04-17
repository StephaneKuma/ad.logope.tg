<?php

namespace App\Http\Controllers\Editor;

use App\User;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $per_page = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->paginate($this->per_page);
        return view('editors.posts/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('last_name', 'first_name', 'id');
        return view('editors.sermons/create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $request->validated();

        $slug = Str::slug($request->title);
        $image = $request->file('image');

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $image_name = $slug . '-'. $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('posts')) {
                Storage::disk('public')->makeDirectory('posts');
            }

            $post_image = Image::make($image)->resize(300, 300)->stream();
            Storage::disk('public')->put('posts/' . $image_name, $post_image);
        }

        $post = new Post();
        $post->user_id = Auth::id();
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->verse = $request->verse;
        $post->image = $image_name;
        $post->body = $request->body;
        $post->save();

        Toastr::success('Succès', "L'article $post->title a bien été ajouté.");
        return redirect()->route('editors.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('editors.posts/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        return view('editors.posts/edit', compact('post', 'categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string  $slug
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, string $slug)
    {
        $request->validated();

        $post = Post::where('slug', $slug)->first();

        $slug = Str::slug($request->title);
        $image = $request->file('image');

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $image_name = $slug . '-'. $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('posts')) {
                Storage::disk('public')->makeDirectory('posts');
            }

            if (Storage::disk('public')->exists('posts/' . $post->image)) {
                Storage::disk('public')->delete('posts/' . $post->image);
            }

            $post_image = Image::make($image)->resize(300, 300)->stream();
            Storage::disk('public')->put('posts/' . $image_name, $post_image);
        }

        $post->user_id = Auth::id();
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->verse = $request->verse;
        $post->image = $image_name;
        $post->body = $request->body;
        $post->update();

        Toastr::success('Succès', "L'article $post->title a bien été modifié.");
        return redirect()->route('editors.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $string
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (Storage::disk('public')->exists('posts/' . $post->image)) {
            Storage::disk('public')->delete('posts/' . $post->image);
        }

        $post->delete();

        Toastr::success('Succès', "L'article $post->title a bien été supprimé.");
        return back();
    }
}
