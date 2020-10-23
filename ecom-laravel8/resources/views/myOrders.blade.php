@extends('master')
@section('title', 'Home Page')
@section('content')

<div class="container mt-5 mb-5 ">
    <div class="row">
        <br>
        <div class="container mt-5 mb-5">
            <h1 class='text-center mt-5 mb-5'>Orders List</h1>

            @foreach($products as $item)
            <div class="row table-bordered m-2 p-3">
                <div class='col-lg-4 col-md-4 col-sm-6 mb-3'>
                    <img class="card-img-top p-2" src="{{$item->gallery}}" alt="Card image cap" height="200px">
                </div>
                <div class='col-lg-6 col-md-4 col-sm-6 mb-3'>
                    <h5 class="card-title">Name: {{$item->name}}</h5>
                    <h5 class="card-title">Delivery Status : {{$item->status}}</h5>
                    <h5 class="card-title">Address : {{$item->address}}</h5>
                    <h5 class="card-title">Payment Status : {{$item->payment_status}}</h5>
                    <p class="card-title">Payment Method: {{$item->payment_method}}</p>
                    <p class="card-text">Price : ৳ {{$item->price}}</p>
                    <p class="card-text">Description : {{$item->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection