@extends('.layouts.admin')

@section('content')

<h1>users</h1>

<table class="table">
  <thead>
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>name</th>
        <th>email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
  </thead>


    <tbody>

   @if($users)
        @foreach($users as $user)
    <tr>

        <td>{{$user->id}}</td>
        <td><img height="50"  src="{{$user->photo ? $user->photo->file : "http://placehold.it/400x400"}}" alt=""></td>
        <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</td></a>
        <td>{{$user->email}}</td>
        <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
        <td>{{$user->is_active== 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffforhumans()}}</td>
    </tr>
        @endforeach
        @endif
    </tbody>
</table>

@stop
