@extends('layouts.admin')

@section('content')

  
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

  <div class="span">
    <a href="{{ url('/admin/users/create') }}"><button class="fa fa-plus btn btn-success"> <strong>Create</strong></button></a>
  
  </div>

  <h2>Users</h2>

  <table class="table">
   <thead>
      <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Read</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    @if($users)

      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" /></td>
        <td><a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{ucfirst($user->role->name)}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
        <!-- <td>{{$user->created_at->diffForHumans()}}</td> -->
        <!-- <td>{{$user->updated_at->diffForHumans()}}</td> -->
        <td><a href="#"><button class="fa fa-eye btn btn-primary"> View</button></a></td>

        <td><a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ]) !!}

        {!! Form::submit('Delete', ['class'=>'fa fa-trash-o btn btn-danger']) !!}

      {!! Form::close() !!}
        </td>
      </tr>

        @endforeach

    @endif
      
   </tbody>
</table>
  
@endsection