@extends('layouts.app')

@section('title','Add new movie')


@section('content' )
    <div>
        <h1>Add new movie</h1>
    </div>
    <div row class="col-md-7">
        <form row class="g-3 needs-validation" action="/newmovie" method="POST">
            @csrf
            <div class="col-md-4">
                <label for="movie_title" class="form-label">Cím</label>
                <input type="text" class="form-control" id="movie_title" name="movie_title" value={{old('movie_title')}}>
                @error('movie_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="movie_director" class="form-label">Director </label>
                <input type="text" class="form-control" id="movie_director" name="movie_director" value={{old('movie_director')}} >
                @error('movie_director')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="movie_year" class="form-label">Year </label>
                <input type="number" class="form-control" id="movie_year" name="movie_year"  value={{old('movie_year')}}>
                @error('movie_year')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="movie_description" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="movie_description" name="movie_description"  value={{old('movie_description')}}>
                @error('movie_description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="movie_length" class="form-label">Length </label>
                <input type="number" class="form-control" id="movie_length" name="movie_length"  value={{old('movie_length')}} >
                @error('movie_length')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection
