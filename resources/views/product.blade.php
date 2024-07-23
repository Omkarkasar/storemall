@extends('master')
@section('content')

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach($products as $index => $item)
        <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
      @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      @foreach($products as $index => $item)
        <div class="item {{$index == 0 ? 'active' : ''}}">
          <a href="detail/{{$item['id']}}">
          <img src="{{$item['gallery']}}" alt="{{$item['name']}}">
          <div class="carousel-caption slider-text">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['description']}}</p>
          </div>
          </a>
        </div>
      @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

  <div class="trending-wrapper">
      <h1>Trending Products</h1>
      <div class="carouseal-inner">
      @foreach($products as $item)
        <div class="trending-item">
        <a href="detail/{{$item['id']}}"><img class="trending-img" src="{{$item['gallery']}}" >
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
      @endforeach
      </div>
  </div>
@endsection
