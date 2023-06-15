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



    // public function create(){

    //     return view( 'pages.create' );

    // }
}