{{-- ? index di ComicController Resource --}}
@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic )
            <div class="col-33">
                <div class="cards">
                    <div class="image">
                        <img src="{{ $comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <div class="info">
                        <h3>{{$comic->title}}</h3>
                        <p>{{$comic->price}}</p>
                        <a href="{{route('comics.show', $comic)}}">Info</a>
                    </div>
                </div>
               
            </div>
                
            @endforeach
        </div>

    </div>

</main>

@endsection