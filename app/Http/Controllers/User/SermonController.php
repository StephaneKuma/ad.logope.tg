<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Models\Sermon;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SermonController extends Controller
{
    private $per_page = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::with('category', 'user')->paginate($this->per_page);
        return view('users.sermons/index', compact('sermons'));
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
        $sermons = Sermon::with('category', 'user')->where('category_id', $category->id)->paginate($this->per_page);
        return view('users.sermons/index', compact('sermons', 'category'));
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
        $sermons = Sermon::with('category', 'user')->where('user_id', $user->id)->paginate($this->per_page);
        return view('users.sermons/index', compact('sermons', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $sermon = Sermon::where('slug', $slug)->first();
        return view('users.sermons/show', compact('sermon'));
    }
}
