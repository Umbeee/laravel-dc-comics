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

    public function edit(Comic $comic){


        return view( 'pages.update', compact( 'comic' ) );

    }

    public function update(Request $request, Comic $comic ){

        $form_data = $request->All();
        $comic->update($form_data);

        return redirect()->route( 'comics.index' );
    }

    public function show (Comic $comic){

        return view( 'pages.show', compact('comic') );

    }

    public function destroy (Comic $comic){


        $comic->delete();
        return redirect()->route( 'comics.index' );
    }

    public function store(Request $request){

        $form_data = $request->All();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
    }
}