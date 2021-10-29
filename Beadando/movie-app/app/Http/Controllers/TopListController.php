<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;

class TopListController extends Controller
{
    public function index(){
        $movies = Movie::withAvg('ratings','rating')->orderBy('ratings_avg_rating','desc')->take(6)->get();
        return view('toplist',['movies'=>$movies]);
    }
}
