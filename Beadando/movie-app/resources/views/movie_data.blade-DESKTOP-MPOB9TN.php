@extends('layouts.app')
@section('title', 'Movie data page')

@section('content')

    <div class="justify-content-center">
        <div class="col-12 col-md-10 mb-5 d-flex ">
            <div class="card w-100 bg-info">
                <div class=" row card-body ">
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
                        <b>Rating</b>
                        {{ round($movie->ratings->avg('rating'),2) }}
                    </div>
                    <div class="col-md-1 flex-row flex-wrap">
                        <b>Year: </b>{{ $movie->year }}
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title mb-0"><b>Title: </b> {{ $movie->description }}</h5>
                    </div>
                    <div class="col-md-1 flex-row flex-wrap">
                        <b>Lenght: </b>{{ $movie->length }} s
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(\Illuminate\Support\Facades\Auth::check() && $movie->ratings_enabled)
        <h2>Rate</h2>
        <div  class="col-12 col-md-12 mb-5">
            <form row class="g-3 needs-validation" action="/new_rate/{{$movie->id}}" method="POST">
                @csrf
                <div class="col-md-5">
                    <label for="rating" class="form-label">Title</label>
                    <select class="form-control" id="rating" name="rating" value={{old('rating')}}>
                        <option value="1" @if(old('rating')==1) selected @endif>1</option>
                        <option value="2" @if(old('rating')==2) selected @endif>2</option>
                        <option value="3" @if(old('rating')==3) selected @endif>3</option>
                        <option value="4" @if(old('rating')==4) selected @endif>4</option>
                        <option value="5" @if(old('rating')==5) selected @endif>5</option>
                    </select>
                    @error('selection')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-5 mb-5">
                    <label for="comment" class="form-label" >Comment </label>
                    <textarea class="form-control" id="comment" maxlength="255" name="comment"> {{old('comment')}}</textarea>
                    @error('comment')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-info">Add</button>
                </div>
            </form>
        </div>
    @endif





    <div class="justify-content-center">
        <h3>RatingList:</h3>
        @forelse ($ratings as  $rating)
            <div class="col-12 col-md-10 mb-5 d-flex ">
                <div class="card w-100 bg-warning">
                    <div class=" row card-body ">
                        <div class="col-md-2">
                            <i class="fas fa-user"></i><h5 class="card-title mb-0">
                                 </h5>{{ $rating->user->name }}
                        </div>
                        <div class="col-md-5"><h5 class="card-title mb-0"><b>Comment:</b></h5>
                            {{ $rating->comment }}
                        </div>
                        <div class="col-md-1 flex-row flex-wrap">
                            <div><b>Rating:</b>
                               {{ $rating->rating }}</div>
                        </div>
                        <div class="col-md-1 align-self-center">
                           <i class="fas fa-clock"></i>  {{ $rating->created_at }}
                        </div>
                    </div>
                </div>
            </div>

        @empty
        @endforelse

    </div>
    <div class="pagination">
        {{ $ratings->links() }}
    </div>
@endsection
