@extends('layouts.admin')

@section('content')
	<h2>Add Salesman</h2>

	{!! Form::open(['method'=>'POST', 'action'=>'SalesmenController@store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('bitly_no', 'Bitly No:') !!}
			{!! Form::number('bitly_no', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('contact', 'Contact No:') !!}
			{!! Form::text('contact', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Salesman', ['class'=>'btn btn-primary']) !!}	
		</div>
	{!! Form::close() !!}

@endsection