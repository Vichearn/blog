<!DOCTYPE html>
<html>
<head>
@extends('layouts.master')

@section('title')

@section('content')

<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('products') }}">Product Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a Product</a>
    </ul>
</nav>

<h1>Create a Product</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'products')) }}

    <div class="form-group">
        {{ Form::label('pd_code', 'Product Code: ') }}
        {{ Form::text('pd_code', Input::old('pd_code'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_name', 'Product Name: ') }}
        {{ Form::text('pd_name', Input::old('pd_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_detail', 'Product Detail: ') }}
        {{ Form::text('pd_detail', Input::old('pd_detail'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_price', 'Product Price: ') }}
        {{ Form::text('pd_price', Input::old('pd_price'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Product!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>

@stop