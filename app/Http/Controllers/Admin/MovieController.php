<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeMovieRequest;
use App\Http\Requests\updateMovieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.movies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeMovieRequest $request)
    {
        $data = $request->validated();

        // $data = $request->all();

        $movies = new Movie();
        $movies->title = $data['title'];
        $movies->original_title = $data['original_title'];
        $movies->nationality = $data['nationality'];
        $movies->date = $data['date'];
        $movies->vote = $data['vote'];
        $movies->save();

        return redirect()->route('admin.movies.show', $movies->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $movie = Movie::findOrFail($id);
        return  view('admin.movies.show', compact('movie'));    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        return  view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateMovieRequest $request, $id)
    {
        $data = $request->validated();

        $movie = Movie::findOrFail($id);

        $movie->update($data);

        return redirect()->route('admin.movies.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return ("admin.movies.index");
    }
}
