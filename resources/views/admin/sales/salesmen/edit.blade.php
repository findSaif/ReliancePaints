@extends('layouts.admin')

@section('content')
	<h2>Edit Salesman</h2>

	{!! Form::model($salesmen, ['method'=>'PATCH', 'action'=>['SalesmenController@update', $salesmen->id]]) !!}
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
			{!! Form::submit('Update Salesman', ['class'=>'btn btn-warning']) !!}	
		</div>
	{!! Form::close() !!}
@endsection