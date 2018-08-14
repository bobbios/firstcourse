@extends('.layouts.admin')

@section('content')

<h1>users</h1>

<table class="table">
  <thead>
    <tr>
        <th>ID</th>
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
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role_id}}</td>
        <td>{{$user->is_active== 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffforhumans()}}</td>
    </tr>
        @endforeach
        @endif
    </tbody>
</table>

@stop
