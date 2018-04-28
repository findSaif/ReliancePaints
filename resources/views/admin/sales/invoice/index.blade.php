@extends('layouts.admin')

@section('content')

  <?php 
  /*
  @if(Session::has('deleted_user'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('deleted_user') }}
      </div>
  @endif

  @if(Session::has('added_user'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('added_user') }}
      </div>
  @endif

  @if(Session::has('updated_user'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ session('updated_user') }}
      </div>
  @endif

  */
?>
  <div class="span">
    <a href="{{ url('/admin/sales/invoice/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
  
  </div>

  <h2>Sales Invoices</h2>

  <table class="table">
   <thead>
      <tr>
        <th>Sales_ID</th>
        <th>Customer_ID</th>
        <th>Discount</th>
        <th>Date</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    @if($sales_invoices)

      @foreach($sales_invoices as $s_i)
      <tr>
        <td>{{$s_i->id}}</td>
        <td>{{$s_i->c_id}}</td>
        <td>{{$s_i->discount}}</td>
        <td>{{$s_i->date}}</td>
        <td><a href="{{route('invoice.show', $s_i->id)}}"><button class="fa fa-eye btn btn-primary"> View Invoice</button></a></td>
        <td><a href="{{ route('invoice.edit', $s_i->id) }}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'action'=>['SalesInvoiceController@destroy', $s_i->id] ]) !!}

        {!! Form::submit('Delete', ['class'=>'fa fa-trash-o btn btn-danger']) !!}

      {!! Form::close() !!}
        </td>
      </tr>

        @endforeach

    @endif
      
   </tbody>
</table>
  
@endsection