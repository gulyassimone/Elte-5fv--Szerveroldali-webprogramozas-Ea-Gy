<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;

class NewRateController extends Controller
{
    public function index($id, Request $request){

        $movie = Movie::find($id);
        $validated=$request->validate(
          [
              'rating' => 'required|in:1,2,3,4,5',
              'comment' => 'nullable|string|min:0|max:255',
          ]
        );

        $exists_ratig = Rating::where('user_id',auth()->user()->id)->where('movie_id',$id)->first();
        if(is_null($exists_ratig)){
            $validated['user_id'] = auth()->user()->id;
            $validated['movie_id'] = $id;
            var_dump($validated);
            $rating = Rating::create($validated);
        }else{
            $rating=Rating::find($exists_ratig->id);
            $rating->comment=$validated['comment'];
            $rating->rating=$validated['rating'];
            $rating->save();
        }

        $request->session()->flash('rating-created', $rating->rate);
        return redirect()->route('movie_data', $id);
    }


}
