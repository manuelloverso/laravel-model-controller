@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row g-3">
            @forelse ($movies as $movie)
                <div class="col-4 ">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{$movie->title}}</h2>
                            <h5><strong>Original Title: </strong>{{$movie->original_title}}</h5>
                            <p><strong>Nationality: </strong>{{$movie->nationality}}</p>
                            <p><strong>Debut date: </strong>{{$movie->date}}</p>
                            <p><strong>Critics' Rating: </strong>{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No movies found</h1>
            @endforelse
        </div>
    </div>
@endsection