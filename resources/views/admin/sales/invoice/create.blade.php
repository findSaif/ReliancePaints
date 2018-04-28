@extends('layouts.admin')


@section('content')

<h2>Add Invoice</h2>

	{!! Form::open(['method'=>'POST', 'action'=>'SalesInvoiceController@store']) !!}

	<div class="form-group">
		{!! Form::label('customer', 'Customer:') !!}
		{!! Form::number('c_id', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('discount', 'Discount:') !!}
		{!! Form::number('discount', 0, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('date', 'Date:') !!}
		{!! Form::date('date', date('d/m/y') ,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('product_id', 'Product ID:') !!}
		{!! Form::number('product_id', 0 ,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('qty', 'Quantity:') !!}
		{!! Form::number('qty', 0 ,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('rate', 'Rate:') !!}
		{!! Form::number('rate', 0 ,['class'=>'form-control']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Add Invoice', ['class'=>'btn btn-primary']) !!}	
	</div>

	{!! Form::close() !!}
@endsection
