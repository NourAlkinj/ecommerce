@extends('master')
@section('content')
    <div class="custom-product">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  @foreach ($products as $product)
                  <div class="item {{$product['id']==1?'active':''}}">
                    <a href="detail/{{$product['id']}}">
                        <img class="slider-img" src="{{$product['gallery']}}" alt="Chania">
                      <div class="carousel-caption slider-text">
                        <p>{{$product['description']}}</p>
                      </div>
                    </a>
                  </div>
                  @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <div>
                <div class="trending-wrapper">
                    <h1> Products</h1>
                    @foreach ($products as $product)
                    <div class="trending-item">
                      <a href="detail/{{$product['id']}}">
                        <img class="trending-img" src="{{$product['gallery']}}">
                        <div class="">
                          <h3>{{$product['name']}}</h3>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
            </div>
    </div>
@endsection
