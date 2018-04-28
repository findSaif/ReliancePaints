@extends('layouts.admin')


@section('content')

	<h2>Create Page</h2>

	{!! Form::open(['method'=>'POST', 'action'=>'PagesController@store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url', 'URL:') !!}
			{!! Form::text('url', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Create Page', ['class'=>'btn btn-primary']) !!}	
		</div>
	{!! Form::close() !!}

@endsection