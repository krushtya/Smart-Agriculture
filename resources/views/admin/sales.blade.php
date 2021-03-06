@extends('layouts.index')

@section('content')
@include('inc.admin_navbar')
<div class="container">
    <a class="btn btn-primary pull-right">Add Item</a>
    @if(count($sales)>0)
    <table class="table">
        <tr>
            <th>Item</th>
            <th>Producer Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Resultant Price</th>
            <th>Quantity</th>
            <th>Options</th>
        </tr>
        @foreach($sales as $sale)
        <tr>
            <td><a href="/../../sales/{{$sale->id}}">{{$sale->name}}</a></td>
            <td>{{$sale->user->name}}</td>
            <td>{{$sale->price}} / {{$sale->unit_for_price->name}}</td>
            <td>{{$sale->discount}}</td>
            <td>{{$sale->price - (($sale->price*$sale->discount) / 100)}}</td>
            <td>{{$sale->quantity}} {{$sale->unit_for_quantity->name}}</td>
            <td>
            <a href="sales/delsale/{{$sale->id}}" class="btn btn-danger pull-right">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <div class="panel-heading">Empty</div>
    @endif
</div>
@endsection