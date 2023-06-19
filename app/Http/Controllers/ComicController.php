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

        $request->validate(
            [
            'title'=>'required|max:20',
            'description'=>'required',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'sale_date'=>'required',
            'type'=>'required'
            ],
            [
                'title.required'=>'Il campo titolo è richiesto',
                'title.max'=>'Il campo titolo non può superare i 20 caratteri',
                'description.required'=>'Il campo description è richiesto',
                'thumb.required'=>'Il campo thumb è richiesto',
                'price.required'=>'Il campo price è richiesto',
                'series.required'=>'Il campo series è richiesto',
                'sale_date.required'=>'Il campo data è richiesto',
                'type.required'=>'Il campo type è richiesto'
            ]
            );

        $form_data = $request->All();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
    }
}