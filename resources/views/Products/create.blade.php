@extends('layouts.master')

@section('title')

@section('content')


<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
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

@stop