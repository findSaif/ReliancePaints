@extends('layouts.admin')

@section('content')

  
  @if(Session::has('deleted_product'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('deleted_product') }}
      </div>
  @endif

  @if(Session::has('added_product'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('added_product') }}
      </div>
  @endif

  @if(Session::has('updated_product'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('updated_product') }}
      </div>
  @endif

  <div class="span">
    <a href="{{ url('/admin/products/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Add new</strong></button></a>
  
  </div>

  <h2>Products</h2>

  <table class="table">
   <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Rate</th>
        <th>Read</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    @if($products)

      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->rate}}</td>
        <td><a href="#"><button class="fa fa-eye btn btn-primary"> View</button></a></td>
        <td><a href="{{ route('products.edit', $product->id) }}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'action'=>['ProductsController@destroy', $product->id] ]) !!}

        {!! Form::submit('Delete', ['class'=>'fa fa-trash-o btn btn-danger']) !!}

      {!! Form::close() !!}
        </td>
      </tr>

        @endforeach

    @endif
      
   </tbody>
</table>
  
@endsection