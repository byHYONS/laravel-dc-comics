@extends('layouts.app')

@section('create')
<main>
    <div class="container create">

        <div class="create__form">
            <div class="head">
                {{--? bottone per tornare alla lista  --}}
                <a class="show" href="{{route('comics.index')}}">Back to the list</a>
            </div>
            <h2>Add Comics:</h2>
            <hr>

            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Description: </label>
                      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                  </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image: </label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                  </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price: </label>
                    {{--todo: è una stringa nel DB  --}}
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series: </label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date: </label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type: </label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Artists: </label>
                    <input type="text" class="form-control" id="artists" name="artists">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers: </label>
                    <input type="text" class="form-control" id="writers" name="writers">
                </div>
    
                <input class="submit" type="submit" class="btn " value="Create Comics">
    
            </form>
            
    </div>
    

    </div>
</main>
    
@endsection


 	 	 	 	 	 	 	 	