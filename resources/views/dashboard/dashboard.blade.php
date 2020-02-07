@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your sales</h4>
                <p class="card-text">Modify your current sales.</p>
                <a href="/dashboard/sales" class="btn btn-primary">My sales</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Receive our services</h4>
                <p class="card-text">Browse our catalog of top-rated services.</p>
                <a href="/dashboard/sale/create" class="btn btn-primary">Add Sale</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection