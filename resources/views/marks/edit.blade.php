@extends('layouts.app')
@section('content')
<h1>Editer {{ $mark->name }}</h1>
<form action="{{ route('marks.update',['mark' => $mark->id]) }} " method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @include('includes.mark')
	<button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>
@endsection