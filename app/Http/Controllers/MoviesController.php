<?php

namespace App\Http\Controllers;

use App\Models\casts;
use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movies::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'rating_star' => 'required',
            'description' => 'required'
        ]);

        $movie = Movie::create($request->all());
        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movies)
    {
        $casts = casts::all();
        return view('movies.show', compact('movie', 'casts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(movies $movies)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }

    public function movie_cast_store(Request $request, Movie $movie) {
        $request->validate([
            'cast_movie_name' => 'required',
            'cast_movie_role' => 'required'
        ]);

        $movie->casts()->attach($request->cast_movie_name, ['role' => $request->cast_movie_role]);
        return back();
    }

    public function movie_cast_destroy(Movie $movie, Cast $cast) {
        $movie->casts()->detach($cast->id);
        return back();
    }
    
}
