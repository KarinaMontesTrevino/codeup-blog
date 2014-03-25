@extends('layouts.master')
  <head>    
    <link href="/css/carousel.css" rel="stylesheet">
    <style>
     .jumbotron{

     	width: 1135px;
     	margin-left: 70px;
     }

    </style>
  </head>
@section('content')

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../img/colorbak.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Web Development</h1>
              <p><img src="../img/kim.jpg" alt="Me" class="img-circle"></p>
              <p>Hello, I'm Karina! <br>A software developer from México.<br>Do you want to know more about me?</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../img/blackflower.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../img/blackflower.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
   
@stop

       

  