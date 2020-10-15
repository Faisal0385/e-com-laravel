@extends('master')
@section('title', 'Home Page')
@section('content')

<div class="container mt-5 mb-5 ">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 shadow p-3 mb-5 bg-white rounded">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($products as $item)
                    <!-- <div class="carousel-item  {{$item['id']==1 ? 'active' : ''}}">
                        <img class="d-block w-100" src="" alt="First slide">
                    </div> -->
                    <div class="carousel-item {{$item['id']==1 ? 'active' : ''}}">
                        <img src="{{$item['gallery']}}" alt="..." height="400px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-danger">{{$item['name']}}</h5>
                            <p class="text-info">{{$item['description']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <div class="container mt-5 mb-5">
            <h1 class='text-center mt-5 mb-5'>Trending Products</h1>
            <div class="row">
                @foreach($products as $item)
                <div class='col-lg-3 col-md-4 col-sm-6 mb-3'>
                    <div class="card">
                        <img class="card-img-top p-2" src="{{$item['gallery']}}" alt="Card image cap" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['name']}}</h5>
                            <p class="card-text">৳ {{$item['price']}}</p>
                            <a href="detail/{{$item['id']}}" class="btn btn-info btn-sm">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>






@endsection