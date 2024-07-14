{{--? pagina del dettaglio card --}}
@extends('layouts.app')

@section('show')

<main>
    <div class="show">
        <div class="cards">
            {{--? immagine del dettaglio --}}
            <div class="image">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>

            {{--? informazioni del dettaglio --}}
            <div class="info">
                <h3>{{$comic->title}}</h3>
                <hr>
                <p>
                    <span>Type: </span>{{$comic->type}} • 
                    <span>Create at: </span>{{ Carbon::parse($comic['created_at'])->format('d.m.Y')}} •
                    <span>Artist: </span> {{$comic->artists}}
                </p>
                <p>
                    <span>Descrption: </span> 
                    {{$comic->description}}

                </p>
                <p>
                    <span>Series: </span> 
                    {{$comic->series}} 
                </p>
                <p>
                    <span>Writers: </span>
                    {{$comic->writers}}
                </p>
                <p>
                    <span>Up Date: </span>
                     {{Carbon::parse($comic->updated_at)->format('d.m.Y')}} •
                    <span>Sale Date: </span> 
                    {{Carbon::parse($comic->sale_date)->format('d.m.Y')}}
                </p>
                <p>
                    <span>Price: </span>
                    {{$comic->price}}
                </p>

                {{--? torna alla lista --}}
                <a href="{{route('comics.index')}}">Torna alla lista</a>

            </div>
        </div>
    </div>
</main>

@endsection





