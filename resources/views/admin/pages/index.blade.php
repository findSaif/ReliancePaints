@extends('layouts.admin')

@section('content')

	@if(Session::has('added_page'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('added_page') }}
  		</div>
	@endif
	@if(Session::has('updated_page'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('updated_page') }}
  		</div>
	@endif
	@if(Session::has('deleted_page'))
		<div class="alert alert-success fade in">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>Success!</strong> {{ session('deleted_page') }}
  		</div>
	@endif

	<div class="span">
		<a href="{{ url('/admin/pages/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
	
	
		
	
	</div>

	<h2>All Pages</h2>

	<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Page Name</th>
			<th>Page URL</th>
			<th>Read</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@if($pages)
			@foreach($pages as $page)
				<tr>
					<td>{{$page->id}}</td>
					<td>{{$page->name}}</td>
					<td>{{$page->url}}</td>
					<td><a href="#"><button class="fa fa-eye btn btn-primary"> <strong>Read</strong></button></a></td>
					<td><a href="{{ route('pages.edit', $page->id) }}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
        <td>
        	{!! Form::open(['method'=>'DELETE', 'action'=>['PagesController@destroy', $page->id] ]) !!}

				{!! Form::submit('Delete', ['class'=>'fa fa-trash-o btn btn-danger']) !!}

			{!! Form::close() !!}
        </td>
				</tr>
			@endforeach
		@endif

	</tbody>
	</table>

@endsection


