<?php

namespace App\Http\Controllers;

use App\Models\casts;
use Illuminate\Http\Request;

class CastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'cast_name' => 'required',
            'cast_image' => 'required'
        ]);

        Cast::create([
            'name' => $request->cast_name,
            'image' => $request->cast_image
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\casts  $casts
     * @return \Illuminate\Http\Response
     */
    public function show(casts $casts)
    {
        return view('casts.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\casts  $casts
     * @return \Illuminate\Http\Response
     */
    public function edit(casts $casts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\casts  $casts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, casts $casts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\casts  $casts
     * @return \Illuminate\Http\Response
     */
    public function destroy(casts $casts)
    {
        $cast->delete();
        return redirect()->route('movies.index');
    }
}
