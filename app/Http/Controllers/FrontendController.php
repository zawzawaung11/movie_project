<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Movie;

class FrontendController extends Controller
{
    public function index()
    {
        Session::put('topbar', 'home');
        $movies = Movie::orderBy('id', 'DESC')->paginate(2);
        $random_movies= Movie::inRandomOrder()->limit(4)->get();
        return view('front-end.index', compact('movies', 'random_movies'));
    }

    public function detail($id)
    {
        $movie=Movie::findorFail($id);
        return view('front-end.detail', compact('movie'));
    }

    public function about()
    {
        Session::put('topbar', 'about');
        return view('front-end.about');
    }

    public function joinUs()
    {
        Session::put('topbar', 'join');
        return view('front-end.joinus');
    }

    public function contactUs()
    {
        Session::put('topbar', 'contact');
        return view('front-end.contact');
    }
}
