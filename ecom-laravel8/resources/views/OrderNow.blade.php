@extends('master')
@section('title', 'Home Page')
@section('content')

<div class="container mt-5 mb-5 ">
    <div class="row">
        <br>
        <div class="container mt-5 mb-5">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Amount</th>

                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tax</th>

                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Delivery</th>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Amount</th>
                        <td>$ {{$total + 10}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="form-group"> 
                        <label for="exampleInputEmail1"><h5>Address</h5></label>                      
                        <textarea name="address" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><h5>Payment Method</h5></label><br>
                        <input  type="radio" value="cash" name="payment"> <span> Online Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span> EMI Payment</span><br>
                        <input type="radio" value="cash" name="payment"> <span> Cash On Delivery</span><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection