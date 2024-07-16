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

            {{--? messagio di avviso degli errori nella compilazione del form --}}
            @if ($errors ->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $message)
                    <li>{{$message}}</li>    
                    @endforeach
                </ul>
            </div>               
            @endif

            {{--? form per modificare i dati --}}
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" class="form-control @if($errors->get('title')) is-invalid @endif" id="title" name="title" value="{{ old('title', $comic->title)}}">
                    @if ($errors->get('title'))
                        @foreach ($errors->get('title') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description: </label>
                      <textarea class="form-control @if($errors->get('description')) is-invalid @endif" name="description" id="description" rows="3">{{ old('description', $comic->description)}}</textarea>
                      @if ($errors->get('description'))
                        @foreach ($errors->get('description') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                  </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image: </label>
                    <input type="text" class="form-control @if($errors->get('thumb')) is-invalid @endif" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
                    @if ($errors->get('thumb'))
                        @foreach ($errors->get('thumb') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                  </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price: </label>
                    <div class="group">
                        {{--todo: il prezzo è una stringa  --}}
                        {{-- <span class="group__text">$</span> --}}
                        <input type="text" class="form-control group__input @if($errors->get('price')) is-invalid @endif" id="price" name="price" value="{{ old('price', $comic->price) }}">
                        @if ($errors->get('price'))
                        @foreach ($errors->get('price') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series: </label>
                    <input type="text" class="form-control @if($errors->get('series')) is-invalid @endif" id="series" name="series" value="{{ old('series', $comic->series)}}">
                    @if ($errors->get('series'))
                        @foreach ($errors->get('series') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date: </label>
                    <input type="date" class="form-control @if($errors->get('sale_date')) is-invalid @endif" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
                    @if ($errors->get('sale_date'))
                        @foreach ($errors->get('sale_date') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type: </label>
                    <input type="text" class="form-control @if($errors->get('type')) is-invalid @endif" id="type" name="type" value="{{ old('type', $comic->type)}}">
                    @if ($errors->get('type'))
                        @foreach ($errors->get('type') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists: </label>
                    <input type="text" class="form-control @if($errors->get('artists')) is-invalid @endif" id="artists" name="artists" value="{{ old('artists', $comic->artists)}}">
                    @if ($errors->get('artists'))
                        @foreach ($errors->get('artists') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers: </label>
                    <input type="text" class="form-control @if($errors->get('writers')) is-invalid @endif" id="writers" name="writers" value="{{ old('writers', $comic->writers)}}">
                    @if ($errors->get('writers'))
                        @foreach ($errors->get('writers') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
    
                <input class="submit" type="submit" class="btn " value="Edit Comics">
    
            </form>
    
    </div>
    

    </div>
</main>
    
@endsection


 	 	 	 	 	 	 	 	