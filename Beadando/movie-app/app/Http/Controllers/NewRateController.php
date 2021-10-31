<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;

class NewRateController extends Controller
{
    public function index($id, Request $request){
        $movie = Movie::find($id);
        $ratings = Rating::where('movie_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        $validated=$request->validate(
          [
              'rating' => 'required|in:1,2,3,4,5',
              'comment' => 'string|min:0|max:255',
          ]
        );


        $validated['user_id'] = auth()->user()->id;
        $validated['movie_id'] = $id;
        var_dump($validated);
        $rating = Rating::create($validated);
        $request->session()->flash('rating-created', $rating->rate);
        return redirect()->route('movie_data', $id);
    }


}
