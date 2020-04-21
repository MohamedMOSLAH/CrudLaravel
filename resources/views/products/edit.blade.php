@extends('layouts.app')
@section('content')
<h1>Editer {{ $product->name }}</h1>
<form action="{{ route('products.update',['product' => $product->id]) }} " method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @include('includes.form')
	<button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>
@endsection