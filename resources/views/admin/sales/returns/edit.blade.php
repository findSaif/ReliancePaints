@extends('layouts.admin')


@section('content')

<h2>Edit Invoice</h2>

	{!! Form::model($sales_return, ['method'=>'PATCH', 'action'=>['SalesReturnController@update', $sales_return->id]]) !!}

	<div class="form-group">
		{!! Form::label('prod_id', 'Product ID:') !!}
		{!! Form::number('prod_id', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('total_qty', 'Quantity:') !!}
		{!! Form::number('total_qty', 0, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('total_rate', 'Amount:') !!}
		{!! Form::number('total_rate', 0 ,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add Sales Return', ['class'=>'btn btn-primary']) !!}	
	</div>

	{!! Form::close() !!}
@endsection
