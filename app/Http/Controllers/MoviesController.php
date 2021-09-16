<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Movie;
use Image;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Session::put('navbar', 'movie');
        $movies = Movie::orderBy('id', 'DESC')->paginate(5);
        return view('back-end.movie.index', compact('movies'));
    }


    public function search(Request $request)
    {
        $movies = Movie::where('title', 'LIKE', '%'.$request->search.'%')
                ->orWhere('cast', 'LIKE', '%'.$request->search.'%')
                ->orWhere('director', 'LIKE', '%'.$request->search.'%')
                ->orderBy('id', 'DESC')
                ->paginate(5);
        return view('back-end.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title ="Create";
        $movie =new Movie;
        return view('back-end.movie.add', compact('title', 'movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "cast" => 'required',
            "director" => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename =$file->getClientOriginalName();

            $img = Image::make($file);
            $img->fit(200, 200)->save(public_path('storage/images/origin/'.$filename));
            $img->fit(80, 80)->save(public_path('storage/images/thumb/'.$filename));

            $data['photo']=$filename;
        }

        if ($request->id) {
            Movie::where('id', $request->id)->update($data);
            Session::flash('update', 'The record is updated successfully!');
        } else {
            $movie = Movie::create($data);
            Session::flash('insert', 'The record is inserted successfully!');
        }

        return redirect(route('movie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title ="Update";
        $movie=Movie::findorFail($id);
        return view('back-end.movie.add', compact('movie', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findorFail($id);
        $movie->delete();
    }
}
