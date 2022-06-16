@extends('layouts.app')

@section('page_title')
Comic {{$comic->id}}
@endsection

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <div class="img_container d-flex align-items-center">
            <img src="{{$comic->thumb}}" alt="">
            <h1 class="display-3">{{$comic->title}}</h1>
        </div>
        <p class="lead py-4">{{$comic->description}}</p>
        <hr class="my-2">
        <p>Buy For:</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">{{$comic->price}}&euro;</a>
        </p>
    </div>
</div>

@endsection