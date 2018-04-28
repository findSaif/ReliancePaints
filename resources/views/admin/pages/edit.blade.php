@extends('layouts.admin')


@section('content')

	<h2>Edit Page</h2>

	{!! Form::model($page, ['method'=>'PATCH', 'action'=>['PagesController@update', $page->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('url', 'URL:') !!}
			{!! Form::text('url', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update Page', ['class'=>'btn btn-primary']) !!}	
		</div>
	{!! Form::close() !!}

@endsection