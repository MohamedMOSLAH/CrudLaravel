@extends('layouts.app')
@section('content')
<h1>Créer un nouveau Product</h1>
<form action="/marks" method="POST">
    @include('includes.mark')
	<button type="submit" class="btn btn-primary">Ajouter une marque</button>
</form>
@endsection