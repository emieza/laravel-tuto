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
    public function update($id) {
        return "Pelicula actualizada correctamente.<br>
                <a href='/'>Seguir</a>";
    }

    // formulari pel STORE:
    public function create() {
    	return view( 'catalog.create' );
    }

    // ve del CREATE 
    public function store() {
        return "Store";
    }
    
    //
    public function destroy() {
        return "Destroy catalog (TODO)";
    }

}
