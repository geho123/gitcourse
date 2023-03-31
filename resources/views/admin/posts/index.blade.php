@extends('layouts.admin')



@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>USER</th>
            <th>CATEGORY</th>
              <th>PHOTO</th>
              <th>TITLE</th>
              <th>BODY</th>
              <th>CREATED</th>
              <th>UPDATED</th>
          </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
              <td><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/50x50'}}" alt="" height="50"></td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at->diffForhumans()}}</td>
              <td>{{$post->updated_at->diffForhumans()}}</td>
          </tr>
            @endforeach
        @endif
        </tbody>
      </table>


@stop