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

            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title: </label>
                    <input type="text" class="form-control @if($errors->get('title')) is-invalid @endif" value="{{ old('title')}}" id="title" name="title">
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
                      <textarea class="form-control @if($errors->get('description')) is-invalid @endif" name="description" id="description" rows="3"> {{ old('description')}} </textarea>
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
                    <input type="text" class="form-control @if($errors->get('thumb')) is-invalid @endif" value="{{ old('thumb')}}" id="thumb" name="thumb">
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
                    {{--todo: è una stringa nel DB  --}}
                    <input type="number" step="0.01" class="form-control @if($errors->get('price')) is-invalid @endif"  value="{{ old('price')}}" id="price" name="price">
                    @if ($errors->get('price'))
                        @foreach ($errors->get('price') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series: </label>
                    <input type="text" class="form-control @if($errors->get('series')) is-invalid @endif"  value="{{ old('series')}}" id="series" name="series">
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
                    <input type="date" class="form-control @if($errors->get('sale_date')) is-invalid @endif"  value="{{ old('sale_date')}}" id="sale_date" name="sale_date">
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
                    <input type="text" class="form-control @if($errors->get('type')) is-invalid @endif" value="{{ old('type')}}" id="type" name="type">
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
                    <input type="text" class="form-control @if($errors->get('artists')) is-invalid @endif" value="{{ old('artists')}}" id="artists" name="artists">
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
                    <input type="text" class="form-control @if($errors->get('writers')) is-invalid @endif" value="{{ old('writers')}}" id="writers" name="writers">
                    @if ($errors->get('writers'))
                        @foreach ($errors->get('writers') as $message)
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endforeach                        
                    @endif
                </div>
    
                <input class="submit" type="submit" class="btn " value="Create Comics">
    
            </form>
            
    </div>
    

    </div>
</main>
    
@endsection


 	 	 	 	 	 	 	 	