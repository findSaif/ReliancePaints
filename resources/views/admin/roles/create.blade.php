@extends('layouts.admin')

@section('content')
	<h2>Add User Access Role</h2>

	{!! Form::open(['method'=>'POST', 'action'=>'RolesController@store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		

		<div class="form-group">
			{!! Form::submit('Add Role', ['class'=>'btn btn-primary']) !!}	
		</div>
	{!! Form::close() !!}

@endsection