<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Cast;
use App\Models\Comment;
use App\Models\movies;

class DashboardMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = movies::get();
        return view('dashboard.movie.index', ['movieList' => $movie]);

        // $movie = movies::all();
        // return view('dashboard.movie.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.movie.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Films  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movie, $id)
    {
        return view ('dashboard.movie.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Films  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movies $movie)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Films  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Films $movie)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Films  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Films $movie)
    {

    }

}