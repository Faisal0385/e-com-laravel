@extends('master')
@section('tiltle', 'Login Page')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>






@endsection()