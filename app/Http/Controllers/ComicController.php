<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

   

    public function index(){

        $comics = Comic::All();



        return view('pages.index', compact ('comics') );

    }



    public function create(){

        return view( 'pages.create' );

    }

    public function update($id){


        $singleComic = Comic::findOrFail( $id );
        return view( 'pages.update', compact('singleComic') );

    }

    public function show ($id){


        $singleComic = Comic::findOrFail( $id );

        return view( 'pages.show', compact('singleComic') );

    }

    public function store(Request $request){

        $form_data = $request->All();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
    }
}