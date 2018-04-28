@extends('layouts.admin')

@section('content')
	@if(Session::has('added_salesmen'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('added_salesmen') }}
  		</div>
	@endif
	@if(Session::has('updated_salesmen'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('updated_salesmen') }}
  		</div>
	@endif
	@if(Session::has('deleted_salesmen'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('deleted_salesmen') }}
  		</div>
	@endif

	<h2>All salesmen</h2>
	<br>
	<div class="span">
		<a href="{{ url('/admin/sales/salesmen/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
	
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Bitly No</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Options</th>
				<th><i class="fa fa-trash-o fa-fw" style="align:center"></i></th>
			</tr>
		</thead>
		<tbody>
			@if($salesmen)
				@foreach($salesmen as $salesman)
					<tr>
						<td>{{$salesman->id}}</td>
						<td>{{$salesman->bitly_no}}</td>
						<td>{{$salesman->name}}</td>
						<td>{{$salesman->contact}}</td>
						<td><a href="{{ route('salesmen.edit', $salesman->id) }}"><button class="btn btn-primary fa fa-eye"></button></a>
							<a href="{{ route('salesmen.edit', $salesman->id) }}"><button class="btn btn-warning fa fa-edit"></button></a>  </td>
						<td>
							<div class="span">
							{!! Form::open(['method'=>'DELETE', 'action'=>['SalesmenController@destroy', $salesman->id] ]) !!}{!! Form::submit('Delete', ['class'=>'btn btn-danger fa fa-trash']) !!}{!! Form::close() !!}
							</div>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>


@endsection