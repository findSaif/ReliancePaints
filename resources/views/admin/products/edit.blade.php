@extends('layouts.admin')


@section('content')

	<h2>Edit Product</h2>
	{!! Form::model($product, ['method'=>'PATCH', 'action'=>['ProductsController@update', $product->id]]) !!}
	

	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::text('description', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('rate', 'Rate:') !!}
		{!! Form::number('rate', 0, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}	
	</div>

	{!! Form::close() !!}

	

@endsection