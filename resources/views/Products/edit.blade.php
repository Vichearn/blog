@extends('layouts.master')

@section('title')

@section('content')


<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
    </ul>
</nav>

<h1>Edit a Product</h1>

<!-- if there are creation errors, they will show here -->
<h1>Edit {{ $product->pd_name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('pd_code', 'Prpduct Code') }}
        {{ Form::text('pd_code', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_name', 'Prpduct Name') }}
        {{ Form::text('pd_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_detail', 'Prpduct Detail') }}
        {{ Form::text('pd_detail', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pd_price', 'Product Price') }}
        {{ Form::text('pd_price', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Product!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop