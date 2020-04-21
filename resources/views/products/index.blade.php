@extends('layouts.app')
@section('content')
<h1>Produits</h1>
	<a href="/products/create" class="btn btn-primary my-3">Nouveau Produit</a>
<ul>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nom</th>
				<th scope="col">Content</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<th scope="row">{{ $product->id }}</th>
			    <td><a href="/products/{{ $product->id }}">{{ $product->name }}</a></td>
				<td>{{ $product->description }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</ul>
<div class="row d-flex justify-content-center">
	{{ $products->links() }}
</div>
@endsection