@extends('layouts.app')
@section('content')
<script>
  jQuery(document).ready(function($) {
    $('#myCarousel').carousel({
            interval: false
    });
    $('#carousel-text').html($('#slide-content-0').html());
    $('[id^=carousel-selector-]').click( function(){
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });
    $('#myCarousel').on('slid.bs.carousel', function (e) {
              var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
  });
</script>
<a href="/products/{{ $product->id }}/edit" class="btn btn-secondary my-3">Editer</a>
<form action="/products/{{ $product->id }}" method="POST" style="display: inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
<hr>
    <div class="container">
      <div id="main_area">
        <div class="row">
          <div class="col-xs-12" id="slider">
            <div class="row">
              <div class="col-sm-6" id="carousel-bounding-box">
                <div class="carousel slide" id="myCarousel">
                  <div class="carousel-inner">
                    @php ($k = -1 )
                    @foreach($pictures as $picture)
                      @if($k==0)
                      <div class="active item" data-slide-number="{{ $k++ }}">
                        <img src="{{ asset($picture->name) }}"></div>
                      @else
                      <div class="item" data-slide-number="{{ $k++ }}">
                        <img src="{{ asset($picture->name) }}"></div>
                      @endif
                     @endforeach
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
              </div>
    
              <div class="col-sm-4" id="carousel-text"></div>
    
              <div id="slide-content" style="display: none;">
                <div id="slide-content-0">
                  <h2>{{ $product->name }}</h2>
                  <h2>Prix : {{ $product->price }}</h2>
                  <h2>Marque : {{ $product->mark->name }}</h2>
                  <p class="sub-text"><strong>Description :</strong> {{ $product->description }} </p>
                </div>
            
              </div>
            </div>
          </div>
        </div>
        <div class="row hidden-xs" id="slider-thumbs">
          <ul class="hide-bullets">
            @php ($k = 0)
            @foreach($pictures as $picture)
              <li class="col-sm-2">
                <a class="thumbnail" id="carousel-selector-0"><img src="{{ asset($picture->name) }}"></a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection