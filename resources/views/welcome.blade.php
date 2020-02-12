<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?beach')">
  <div class="container">
    @if(Auth::user())
      <h1 class="display-4">Welcome back, {{ Auth::user()->nickname}}!</h1>
      <p class="lead">Incentro data holding center</p>
      <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
    @else
      <h1 class="display-3">sale management made easy.</h1>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
      <a href="/login" class="btn btn-success btn-lg my-2">Login to access your sales</a>
    @endif              
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Manage all your car repairs</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Best prices</h5>
                    <p class="card-text">We have the best prices around town</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Book and manage with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection