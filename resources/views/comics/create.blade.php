@extends('layouts.app')

@section('page_title')
form
@endsection

@section('content')

<div class="container">
@include('partials.error')
<form action="{{route('comics.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titlehelp" value="{{old('title')}}">
    <div id="titlehelp" class="form-text">Inserire il titolo del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control" name="description" id="description" aria-describedby="descriptionhelp">
    {{old('title')}}
    </textarea>
    <div id="descriptionhelp" class="form-text">Inserire la descrizione del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label">Image</label>
    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbhelp" value="{{old('thumb')}}">
    <div id="thumbhelp" class="form-text">Inserire Immagine del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="pricehelp" value="{{old('price')}}">
    <div id="pricehelp" class="form-text">Inserire il prezzo del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="series" class="form-label">Serie</label>
    <input type="text" class="form-control" name="series" id="series" aria-describedby="serieshelp" value="{{old('series')}}">
    <div id="serieshelp" class="form-text">Inserire la Serie del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label">Uscita</label>
    <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_datehelp" value="{{old('sale_date')}}">
    <div id="sale_datehelp" class="form-text">Inserire il giorno di uscita del fumetto</div>
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Genere</label>
    <input type="text" class="form-control" name="type" id="type" aria-describedby="typehelp" value="{{old('type')}}">
    <div id="typehelp" class="form-text">Inserire il genere del fumetto</div>
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
</div>

@endsection