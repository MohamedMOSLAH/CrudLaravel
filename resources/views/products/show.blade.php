@extends('layouts.app')
@section('content')
<a href="/products/{{ $product->id }}/edit" class="btn btn-secondary my-3">Editer</a>
<form action="/products/{{ $product->id }}" method="POST" style="display: inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
<hr>
<style>
    .img-responsive{width:100%;margin:0px 0;}
    .hide-bullets {
    list-style: none;
    margin-top: 0px;
    padding: 0;

    float: right;
    width: 100%;
    margin-bottom: 0;
    }
</style>
<div class="row">
    <div class="col-sm-6">
    <div class="" id="carousel-bounding-box">
    <div class="carousel slide" id="myCarousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
        @php ($k = 0 )
        @foreach($pictures as $picture)
        @if($k==0)
            <div class="active item" data-slide-number="{{ $k++ }}">
                <img src="{{ asset($picture->name) }}" class="img-responsive">
            </div>
        @endif
        @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
    </a>
</div> 
</div>   
<div class="clearfix"></div>
<div class="row">
    <div id="slider-thumbs">
    <!-- Bottom switcher of slider -->
    <ul class="hide-bullets">
        @php ($k = 0)
        @foreach($pictures as $picture)
        @php ($k = $k+1)
        @if($k>1)
        <li class="col-sm-3 col-xs-3">
        <a id="carousel-selector-{{ $k }}" data-target="#myCarousel" data-slide-to="{{ $k }}">
            <img src="{{ asset($picture->name) }}" class="img-responsive">
            
            </a>
        </li>
        @endif
        @endforeach
    </ul>
    </div>
    </div>
    </div>
    <div> 
        <h1>{{ $product->name }}</h1>
        <h2>Prix : {{ $product->price }}</h2>
        <p><strong>Description :</strong> {{ $product->description }}   </p> </div>    
    </div>    
</div>
@endsection