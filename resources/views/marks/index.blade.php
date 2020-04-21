@extends('layouts.app')
@section('content')
<h1>Marques</h1>
	<a href="/marks/create" class="btn btn-primary my-3">Nouveau Marque</a>
<ul>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nom</th>
			</tr>
		</thead>
		<tbody>
			@foreach($marks as $mark)
			<tr>
				<th scope="row">{{ $mark->id }}</th>
			    <td><a href="/marks/{{ $mark->id }}">{{ $mark->name }}</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</ul>
<div class="row d-flex justify-content-center">
	{{ $marks->links() }}
</div>
@endsection