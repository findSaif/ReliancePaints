@extends('layouts.admin')

@section('content')
	<h2>Edit Customer</h2>

	{!! Form::model($customer, ['method'=>'PATCH', 'action'=>['CustomersController@update', $customer->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('contact', 'Contact No:') !!}
			{!! Form::text('contact', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type', 'Customer type:') !!}
			{!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'e.g Retailer']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('grade', 'Grade:') !!}
			{!! Form::select('grade', ['A'=>'Excellent', 'B'=>'Good', 'C'=>'Average', 'D'=>'Poor'], ['class'=>'form-control']	) !!}
		</div>
		<div class="form-group">
			{!! Form::label('credit_limit', 'Credit Limit:') !!}
			{!! Form::number('credit_limit', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('balance', 'Balance:') !!}
			{!! Form::number('balance', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('date_from', 'Date From: (Credit Limit)') !!}
			{!! Form::date('date_from', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('date_to', 'Date to: (Credit Limit)') !!}
			{!! Form::date('date_to', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update Customer', ['class'=>'btn btn-warning']) !!}	
		</div>
	{!! Form::close() !!}
@endsection