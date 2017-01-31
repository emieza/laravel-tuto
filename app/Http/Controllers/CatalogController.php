<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    //
    public function index() {
        $pelis = Movie::all();

        return view( 'catalog.index' )->with("arrayPeliculas", $pelis);
    }

    //
    public function show($id) {
        $peli = Movie::find($id);
    	return view( 'catalog.show', array(
                    'peli'=>$peli,
                    'id'=>$id) );
    }
    
    // form pel UPDATE
    public function edit($id) {
    	return view( 'catalog.edit', array('id'=>$id) );
    }
    
    // ve del EDIT
    public function update(Request $request, $id) {
        $movie = Movie::find($id);
        if( $request->has("title") && $request->has("year") &&
            $request->has("director") && $request->has("poster") &&
            $request->has("synopsis")
        ) {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            if( $request->has("rented") )
                $movie->rented = true;
            $movie->save();
            return "Update OK.<br>
                    <a href='/'>Seguir</a>";
        } else
            return "Update: Faltan datos.<br>
                    <a href='/'>Seguir</a>";
    }

    // formulari pel STORE:
    public function create() {
    	return view( 'catalog.create' );
    }

    // ve del CREATE 
    public function store(Request $request) {
        $movie = new Movie();
        if( $request->has("title") && $request->has("year") &&
            $request->has("director") && $request->has("poster") &&
            $request->has("synopsis")
        ) {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            $movie->save();
            return "Stored OK.<br>
                    <a href='/'>Seguir</a>";
        } else
            return "Store: Faltan datos.<br>
                    <a href='/'>Seguir</a>";
    }
    
    //
    public function destroy() {
        return "Destroy catalog (TODO)";
    }

}
