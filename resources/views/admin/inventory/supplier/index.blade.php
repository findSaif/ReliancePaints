@extends('layouts.admin')

@section('content')
	@if(Session::has('added_customer'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('added_customer') }}
  		</div>
	@endif
	@if(Session::has('updated_customer'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('updated_customer') }}
  		</div>
	@endif
	@if(Session::has('deleted_customer'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('deleted_customer') }}
  		</div>
	@endif

	<h2>All Customers</h2>
	<br>
	<div class="span">
		<a href="{{ url('/admin/sales/customers/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
	
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Type</th>
				<th>Credit Limit (Rs.)</th>
				<th>Options</th>
				<th><i class="fa fa-trash-o fa-fw" style="align:center"></i></th>
			</tr>
		</thead>
		<tbody>
			@if($customers)
				@foreach($customers as $customer)
					<tr>
						<td>{{$customer->id}}</td>
						<td>{{$customer->name}}</td>
						<td>{{$customer->address}}</td>
						<td>{{$customer->contact}}</td>
						<td>{{$customer->type}}</td>
						<td>{{$customer->credit_limit}}</td>
						<td><a href="{{ route('customers.edit', $customer->id) }}"><button class="btn btn-primary fa fa-eye"></button></a>
							<a href="{{ route('customers.edit', $customer->id) }}"><button class="btn btn-warning fa fa-edit"></button></a>  </td>
						<td>
							<div class="span">
							{!! Form::open(['method'=>'DELETE', 'action'=>['CustomersController@destroy', $customer->id] ]) !!}{!! Form::submit('Delete', ['class'=>'btn btn-danger fa fa-trash']) !!}{!! Form::close() !!}
							</div>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>


@endsection