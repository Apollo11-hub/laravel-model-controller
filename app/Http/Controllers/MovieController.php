<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies_db = Movie::all();
        return view('movies', compact('movies_db'));
    }
}
