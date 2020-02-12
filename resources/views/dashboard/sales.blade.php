@extends('index')
@section('title', 'Sales')
@section('content')
<div class="container mt-5">
    <h2>Your Sales</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Item Name</th>
            <th scope="col"> Service Name</th>
            <th scope="col">Sale Posted by</th>
            <th scope="col">Quantity</th>
            <th scope="col">Type of Sale</th>
            <th scope="col">Total Cost</th>
            <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->item->code }}</td>
                <td>{{ $sale->service->code }}</td>
                <td>{{ $user_id['nickname'] }}</td>
                <td>{{ $sale->total_cost }}</td>
                <td>{{ $sale->type }}</td>
                <td>${{ $sale->quantity }}</td>
            @if($user_id['sub']!=='auth0|5e3bcbc86df59d0f47dec213')
                <td class="btn btn-sm btn-warning">Cant edit</td>
            @else
                <td><a href="/dashboard/sales/{{ $sale->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            @endif
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection