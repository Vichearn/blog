<!DOCTYPE html>
<html>
<head>
@extends('layouts.master')

@section('title')

@section('content')

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a Product</a>
    </ul>
</nav>


<h1>Showing {{ $product->pd_name }}</h1>

    <div class="jumbotron">
        <h2>{{ $product->pd_name }}</h2>
        <p>
            <strong>Product Code:</strong> {{ $product->pd_code }}<br>
            <strong>Product Detail:</strong> {{ $product->pd_detail }}<br>
            <strong>Product Price:</strong> {{ $product->pd_price }}<br>
            <strong>Created Date:</strong> {{ $product->created_at }}<br>
            <strong>Update Date:</strong> {{ $product->updated_at }}

            <!-- <strong>Product Code:</strong> {{ $product['pd_code'] }}<br>
            <strong>Product Detail:</strong> {{ $product['pd_detail'] }}<br>
            <strong>Product Price:</strong> {{ $product['pd_price'] }}<br>
            <strong>Created Date:</strong> {{ $product['created_at'] }}<br>
            <strong>Update Date:</strong> {{ $product['updated_at'] }} -->
        </p>
    </div>
@stop