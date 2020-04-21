@extends('layouts.app')

@section('content')


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
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item" data-slide-number="0">
           <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
           
        </div>
        <div class="item" data-slide-number="1">
           <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
          
        </div>
        <div class="item" data-slide-number="2">
           <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
           
        </div>
        <div class="item" data-slide-number="3">
           <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
         
        </div>
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

    <li class="col-sm-3 active col-xs-3">
        <a  id="carousel-selector-0"  data-target="#myCarousel" data-slide-to="0">
        <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
        
        </a>
    </li>
    <li class="col-sm-3 col-xs-3">
        <a id="carousel-selector-1" data-target="#myCarousel" data-slide-to="1">
        <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
        
        </a>
    </li>
    <li class="col-sm-3 col-xs-3">
        <a id="carousel-selector-2" data-target="#myCarousel" data-slide-to="2">
        <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
        
        </a>
    </li>
    <li class="col-sm-3 col-xs-3">
        <a id="carousel-selector-3" data-target="#myCarousel" data-slide-to="3">
        <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-responsive">
        
        </a>
    </li>
    </ul>
    </div>
    </div>
    </div>

    <div>Contenu textuel</div>

    
    </div>  


</div>

@endsection
