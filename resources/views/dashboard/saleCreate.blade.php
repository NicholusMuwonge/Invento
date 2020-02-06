@extends('index')
@section('title', 'Create sale')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $sale->item_id->code }} - <small class="text-muted">{{ $sale->service_id->code }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Create Sale !</p>
            <form action="{{ route('sale.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Sale Type</label>
                            <select class="form-control" name="room_id" value="{{ old('type', $sale->type) }}">
                                    <option value="{{$sale->id}}">{{ $sale->type }} </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Quantity</label>
                            <input class="form-control" name="num_of_guests" value="{{ old('quantity', $sale->quantity) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Total Cost</label>
                            <input type="date" class="form-control" name="total_cost" placeholder="cost" value="{{ old('total_cost', $sale->total_cost) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Quantity</label>
                            <input type="date" class="form-control" name="quantity" placeholder="quantity" value="{{ old('quantity', $sale->quantity) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Book it</button>
            </form>
        </div>
    </div>
</div>
@endsection