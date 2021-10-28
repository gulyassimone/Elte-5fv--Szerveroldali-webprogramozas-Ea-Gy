<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMovieController extends Controller
{
    public function index(){
        return view('addMovie');
    }

    public function save(Request $request){
        $request->validate([
            'movie_title' => 'required|min:3'
        ]);
        return view('welcome');
    }
}
