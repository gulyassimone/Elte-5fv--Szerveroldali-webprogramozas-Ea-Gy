<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;

class MovieDataController extends Controller
{
    public function index($id)
    {
        $movie = Movie::find($id);
        $ratings = Rating::where('movie_id', $id)->orderBy('updated_at', 'DESC')->paginate(10);
        return view('/movie_data',['ratings'=>$ratings, 'movie'=>$movie]);
    }
}
