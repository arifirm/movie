@extends('dashboard.layouts.main')

<html lang="en">

@section('container')

	<h1>All Movies <a href="/dashboard/movie/create">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-plus"></i>
        </button></a>
    </h1>
    

    <div class="row">
    @foreach($movieList as $item)
    <div class="col-md-4">
    <div class="card">
        <img src="{{ $item->image }}" class="card-image-top">
        <div class="card-body">
                <h3><a href="/dashboard/movie/show/{{ $item->id }} ">{{ $item->title }}</a></h3>
                <div class="text-danger">
                    @for ($i = 1; $i <= $item->rating_star; $i++)
                    <i class='far fa-star'></i>
                    @endfor
                    <br>
	      </div>
              <p>{{ Str::limit($item->description, 100) }}</p>
        </div>
    </div>
    </div>
    @endforeach
    </div>
@endsection