@extends('master')
@section('tiltle', 'Login Page')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>






@endsection()