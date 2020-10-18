@extends('master')
@section('title', 'Product Details Page')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" height="300px">
        </div>
        <div class="col-sm-6">
            <table class="table table-dark">
                <tbody>
                    <tr>
                        <th scope="col">Name: </th>
                        <td>{{$product['name']}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Description: </th>
                        <td>{{$product['description']}}</td>                        
                    </tr> 
                    <tr>
                        <th scope="col">Price: </th>
                        <td>{{$product['price']}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Category: </th>
                        <td>{{$product['category']}}</td>
                    </tr>                  
                </tbody>
            </table>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{ $product['id'] }}>
                <button type="submit" class="btn btn-danger bnt-sm">Add To Cart</button>
            </form>
            
        </div>
    </div>
</div>






@endsection