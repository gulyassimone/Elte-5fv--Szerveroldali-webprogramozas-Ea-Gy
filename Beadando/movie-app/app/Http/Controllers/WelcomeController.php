<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $movies = Movie::paginate(10);
        return view('welcome',['movies'=>$movies]);
    }
}
