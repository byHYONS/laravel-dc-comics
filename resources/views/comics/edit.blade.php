@extends('layouts.app')

@section('edit')
<main>
    <div class="container edit">

        <div class="edit__form">

            {{--? bottone per tornare indietro  --}}
            <div class="head">
                <a class="show" href="{{route('comics.show', $comic)}}">Back to the info</a>
            </div>

            <h2>Edit Comics:</h2>
            <hr>

            {{--? form per modificare i dati --}}
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title)}}">
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description: </label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic->description)}}</textarea>
                  </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image: </label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
                  </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price: </label>
                    <div class="group">
                        {{--todo: il prezzo è una stringa  --}}
                        {{-- <span class="group__text">$</span> --}}
                        <input type="text" class="form-control group__input" id="price" name="price" value="{{ old('price', $comic->price) }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series: </label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series)}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date: </label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type: </label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type)}}">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists: </label>
                    <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists', $comic->artists)}}">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers: </label>
                    <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers', $comic->writers)}}">
                </div>
    
                <input class="submit" type="submit" class="btn " value="Edit Comics">
    
            </form>
    
    </div>
    

    </div>
</main>
    
@endsection


 	 	 	 	 	 	 	 	