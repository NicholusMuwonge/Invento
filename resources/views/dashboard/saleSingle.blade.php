@extends('index')
@section('title', 'Edit Sale')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>Sale !</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $sale->item_id['code'] }} - <small>{{ $sale->service_id['code'] }}</small>
                        </h3>
                        <p class="card-text"><strong>Total Cost: </strong>{{ $sale->total_cost }}</p>
                        <p class="card-text"><strong>Type of Sale: </strong>{{ $sale->type }}</p>
                        <p class="card-text"><strong>Quantity: </strong>{{ $sale->quantity }}</p>
                        <p class="card-text"><strong>Sale Posted by: </strong>{{ user_id->nickname }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/sale/{{ $sale->id }}/edit" class="btn btn-lg btn-success">Edit this Sale</a>
                    <a href="/dashboard/sale/{{ $sale->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection