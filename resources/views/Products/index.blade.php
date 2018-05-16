@extends('layouts.master')

@section('title')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

@section('content')
		<nav class="navbar navbar-inverse">
		    <ul class="nav navbar-nav">
		        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
		        <li><a href="{{ URL::to('products/create') }}">Create a Product</a></li>
		    </ul>
		</nav>

		<h1>Products List</h1>

		<!-- will be used to show any messages -->
		@if (Session::has('message'))
		    <div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif

		<table class="table table-striped table-bordered">
		    <thead align="center">
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
		                <a class="btn btn-small btn-success btn-sm" href="{{ URL::to('products/' . $value->id) }}">Show</a>

		                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
		                <a class="btn btn-small btn-info btn-sm" href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit</a>

		                <!--{{ Form::open(array('url' => 'products/' . $value->id, 'class' => 'pull-right')) }}
                    	{{ Form::hidden('_method', 'DELETE') }}
                    	{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm')) }}
                		{{ Form::close() }}-->

                		{{ Form::open(['id'=>'deleteForm','method'=>'DELETE','url'=>'/products/' . $value->id]) }}
                		{{ Form::hidden('_method', 'DELETE') }}
                		{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                		{{ Form::close() }}

		                <!--<form action="{{action('ProductsController@destroy', $value['id'])}}" method="post">
            			@csrf
	            			<input name="_method" type="hidden" value="DELETE">
	            			<button class="btn btn-danger" type="submit">Delete</button>
          				</form>-->
		            </td>
		        </tr>
		    @endforeach
		    </tbody>
		</table>
@stop