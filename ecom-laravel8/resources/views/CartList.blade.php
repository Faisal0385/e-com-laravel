@extends('master')
@section('title', 'Home Page')
@section('content')

<div class="container mt-5 mb-5 ">
    <div class="row">
        <br>
        <div class="container mt-5 mb-5">
            <h1 class='text-center mt-5 mb-5'>Cart List</h1>

            @foreach($products as $item)
            <div class="row table-bordered m-2 p-3">
                <div class='col-lg-4 col-md-4 col-sm-6 mb-3'>
                    <img class="card-img-top p-2" src="{{$item->gallery}}" alt="Card image cap" height="200px">
                </div>
                <div class='col-lg-6 col-md-4 col-sm-6 mb-3'>
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-title">{{$item->description}}</p>
                    <p class="card-text">৳ {{$item->price}}</p>
                </div>
                <div class='col-lg-2 col-md-4 col-sm-6 mb-3'>
                    <a href="removecart/{{$item->cart_id}}" class="btn btn-danger btn-sm">Remove</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


@endsection