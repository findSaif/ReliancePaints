@extends('layouts.admin')

@section('content')
	@if(Session::has('added_role'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('added_role') }}
  		</div>
	@endif
	@if(Session::has('updated_role'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('updated_role') }}
  		</div>
	@endif
	@if(Session::has('deleted_deleted'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('deleted_role') }}
  		</div>
	@endif

	<h2>User Access Roles</h2>
	<br>
	<div class="span">
		<a href="{{ url('/admin/roles/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
	
	</div>

	<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Role Name</th>
			<th>Read</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@if($roles)
			@foreach($roles as $role)
				<tr>
					<td>{{$role->id}}</td>
					<td>{{$role->name}}</td>
					<td><a href="{{ route('roles.edit', $role->id) }}"><button class="btn btn-primary fa fa-eye"> View</button></a></td>
					<td><a href="{{ route('roles.edit', $role->id) }}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
					
        <td>
        	{!! Form::open(['method'=>'DELETE', 'action'=>['RolesController@destroy', $role->id] ]) !!}

				{!! Form::submit('Delete', ['class'=>'fa fa-trash-o btn btn-danger']) !!}

			{!! Form::close() !!}
        </td>
				</tr>
			@endforeach
		@endif

	</tbody>
	</table>
@endsection