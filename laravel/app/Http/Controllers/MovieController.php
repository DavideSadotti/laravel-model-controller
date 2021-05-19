<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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

        
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y') + 1;
        $request->validate([
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'plot' => 'required|string',
            'year' => 'required|numeric|min:1900|max:'.$year,
        ]);

        $movieNew = Movie::create($request->all());

        // $movieNew = new Movie();
        // $movieNew->title = $data['title'];
        // $movieNew->film_director = ['datafilm_director'];
        // $movieNew->genres = $data['genres'];
        // $movieNew->plot = $data['plot'];
        // $movieNew->year = $data['year'];

        // // if( !empty($data['cover_image']))

        return redirect()->route('movies.show', $movieNew);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $year = date('Y') + 1;
        $request->validate([
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'plot' => 'required|string',
            'year' => 'required|numeric|min:1900|max:'.$year,
        ]);

        $movie->update($request->all());

        return redirect()->route('movies.show', $movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('message', 'Il film è stato eliminato');
    }
}
