@extends('layouts.app')

@section('page_title')
Comics
@endsection

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>thumb</th>
                <th>price</th>
                <th>series</th>
                <th>sale_date</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
            @forelse($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img width="50" src="{{$comic->thumb}}" alt="/"></td>
                    <td>{{$comic->price}} &euro;</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}">View</a>
                        <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td>No Comics Yet!</td>
            @endforelse
        </tbody>
    </table>
    
</div>

@endsection