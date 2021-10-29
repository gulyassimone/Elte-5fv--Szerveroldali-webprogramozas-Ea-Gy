@extends('layouts.app')
@section('title', 'Toplist')

@section('content')

<div class = "justify-content-center">
    <h3>Toplist:</h3>
    @forelse ($movies as $key => $movie)
        <div class="col-12 col-md-10 mb-5 d-flex ">
            <div class="card w-100 bg-info">
                <div  class=" row card-body ">
                    <div class="col-md-1 align-self-center card-title" >
                         <b># {{ $key + 1 }}</b>
                    </div>
                    <div class="col-md-5">
                        <i class="fas fa-camera-movie"></i><h5 class="card-title mb-0"> <b>Title: </b> {{ $movie->title }}</h5>
                        <small class="text-secondary">
                                        <span class="mr-2"><b>Director:</b>
                                            <span>{{ $movie->director }}</span>
                                        </span>
                        </small>
                    </div>
                    <div class="col-md-2 flex-row flex-wrap">
                        <img class="movie-picture" src='{{ asset("storage/base-movie.png") }}' alt ="">
                    </div>
                    <div class="col-md-1 flex-row flex-wrap">
                        <b>Rating</b>
                        {{ $movie->ratings->avg('rating') }}
                    </div>
                    <div class="col-md-1 align-self-center">
                        <a href="/movie/{{ $movie->id }}" class="btn btn-primary">Megtekint <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
</div>
@endsection
