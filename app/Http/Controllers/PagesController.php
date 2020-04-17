<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Sermon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function about_us()
    {
        return view('pages.about_us');
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('pages.activities', compact('activities'));
    }

    public function sermons()
    {
        $sermons = Sermon::with('user')->get();
        return view('pages.sermons', compact('sermons'));
    }
}
