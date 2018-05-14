@extends('layouts.master')

@section('title')

@section('content')
		<nav class="navbar navbar-inverse">
		    <div class="navbar-header">
		        <a class="navbar-brand" href="{{ URL::to('products') }}">Product Alert</a>
		    </div>
		    <ul class="nav navbar-nav">
		        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
		        <li><a href="{{ URL::to('products/create') }}">Create a Product</a>
		    </ul>
		</nav>

		<h1>Products List</h1>

		<!-- will be used to show any messages -->
		@if (Session::has('message'))
		    <div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		<table class="table table-striped table-bordered">
		    <thead>
		        <tr>
		        	<td>Product Code</td>
		            <td>Product Name</td>
		            <td>Product Detail</td>
		            <td>Product Price</td>
		            <td>Created Date</td>
		            <td>Update Datde</td>
		            <td>Actions</td>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($products as $key => $value)
		        <tr>
		        	<td> {{ $value->pd_code }}</td>
		            <td> {{ $value->pd_name }}</td>
	    			<td> {{ $value->pd_detail }}</td>
	    			<td> {{ $value->pd_price }}</td>
	    			<td> {{ $value->created_at }}</td>
	    			<td> {{ $value->updated_at }}</td>

		            <!-- we will also add show, edit, and delete buttons -->
		            <td>

		                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
		                <!-- we will add this later since its a little more complicated than the other two buttons -->

		                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
		                <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Show</a>

		                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
		                <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit</a>

		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>

	<br />

	@for ($i = 0; $i < 10; $i++)
    	The current value is {{ $i }}<br />
	@endfor
	<br />
	
	The current UNIX timestamp is {{ time() }}
@stop