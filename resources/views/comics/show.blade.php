{{--? pagina del dettaglio card --}}

{{--? holding per modale --}}
<div class="screen holding">
 
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
                {{--? bottone per tornare indietro alla lista --}}
                <div class="head">
                    <a class="show" href="{{route('comics.index')}}">Back to the list</a>
                </div>
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

                <div class="button"></div>
                {{--? torna alla lista --}}
                <a class="edit" href="{{route('comics.edit', $comic)}}">Edit this item</a>
                <a class="destroy" href="#">Delete this item</a>

                {{--? modale --}}
                <div class="delete__modale holding">
                    <span class="modale__exit">CLOSE</span>
                    <h4>Are you sure you want to delete?</h4>
                    <p>The cancellation action is ireversible</p>
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="delete" type="submit" value="Delete permanently">
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection

</div> 



