@extends('layouts.app')
@section('content')
    <a href="/marks/{{ $mark->id }}/edit" class="btn btn-secondary my-3">Editer</a>
    <form action="/marks/{{ $mark->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <hr>

    <div> 
        <h1>{{ $mark->name }}</h1>
    </div>    

@endsection