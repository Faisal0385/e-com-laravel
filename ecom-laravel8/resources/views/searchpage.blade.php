@extends('master')
@section('title', 'Home Page')
@section('content')

<div class="container mt-5 mb-5 ">
    <div class="row">
        <br>
        <div class="container mt-5 mb-5">
            <h1 class='text-center mt-5 mb-5'>Search Products</h1>
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