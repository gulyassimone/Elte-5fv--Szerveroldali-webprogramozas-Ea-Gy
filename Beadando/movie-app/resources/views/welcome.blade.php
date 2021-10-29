@extends('layouts.app')

@section('title','MainPage')


@section('content' )
    <div class="justify-content-center">
        <h3>Movie List:</h3>
        @forelse ($movies as $key => $movie)
            <div class="col-12 col-md-10 mb-5 d-flex ">
                <div class="card w-100 bg-info">
                    <div class=" row card-body ">
                        <div class="col-md-1 align-self-center card-title">
                            <b># {{ $movies->perPage() * ($movies->currentPage()-1) + $key+1}}</b>
                        </div>
                        <div class="col-md-5">
                            <i class="fas fa-camera-movie"></i><h5 class="card-title mb-0">
                                <b>Title: </b> {{ $movie->title }}</h5>
                            <small class="text-secondary">
                                        <span class="mr-2"><b>Director:</b>
                                            <span>{{ $movie->director }}</span>
                                        </span>
                            </small>
                        </div>
                        <div class="col-md-2 flex-row flex-wrap">
                            <img class="movie-picture" src='{{ asset("storage/base-movie.png") }}' alt="">
                        </div>
                        <div class="col-md-1 flex-row flex-wrap">
                            <div><b>Rating:</b>
                                {{ round($movie->ratings->avg('rating'), 2)}}</div>
                            <div>
                                @for ($i = 1; $i <= $movie->ratings->avg('rating') ; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
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
    <div class="pagination">
        {{ $movies->links() }}
    </div>
@endsection
