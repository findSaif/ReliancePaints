@extends('layouts.admin')

@section('content')
	<h2>Edit Access Roles</h2>

	{!! Form::model($role, ['method'=>'PATCH', 'action'=>['RolesController@update', $role->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update Role', ['class'=>'btn btn-warning']) !!}	
		</div>
	{!! Form::close() !!}
@endsection