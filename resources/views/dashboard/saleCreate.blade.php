@extends('index')
@section('title', 'Create sale')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Sale Creation
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Create Sale !</p>
            <form action="{{ route('sale.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="first_name">Item Code:</label>
                            <select class="form-control" name="dropdown" required>
                                @foreach($item as $item)
                                <option id="item_select" value="{{ $item['id'] }}">{{ $item->code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="first_name">Service:</label>
                            <select class="form-control" name="dropdown" >
                                @foreach($service as $item)
                                <option value="{{ $item['id'] }}">{{ $item->code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Type:</label>
                            {!! Form::select('role', ['type' => 'sale','service','both'], 'Type', ['class' => 'form-control','required']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Quantity:</label>
                            <input type="text" class="form-control" name="quantity" required />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Cost:</label>
            
                            <input type="text" class="form-control" name="total_cost" required />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Create Sale</button>
            </form>
        </div>
    </div>
</div>
@endsection