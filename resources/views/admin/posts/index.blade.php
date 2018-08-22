@extends('layouts.admin')

@section('content')


<h1>Posts</h1>

    <table class="table">
      <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Photo</th>
            <th scope="col">Owner</th>
            <th scope="col">category</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">created</th>
            <th scope="col">updated</th>
        </tr>
      </thead>
      <tbody>

      @if($posts)


        @foreach($posts as $post)



         <tr>
                <td>{{$post->id}}</td>
             <td><img height="50" align="middle" src="{{$post->photo_id ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
             <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach

          @endif
      </tbody>
    </table>

@stop