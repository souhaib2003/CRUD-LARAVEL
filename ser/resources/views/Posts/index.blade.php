@extends('layouts.app')
@section('title')index @endsection
@section('content')


    <div class="text-center">
    <a href="{{route('posts.create')}}" class="btn btn-success">Creat Post</a>
 
    <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <td>{{$post['id']}}</td>
      <td>{{$post['Title']}}</td>
      <td>{{$post['Posted_by']}}</td>
      <td>{{$post['Created_at']}}</td>
      <td>
        <a href="{{route('posts.schow',$post['id'])}}" class="btn btn-info">View</a>
        <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
        <form  style="display: inline;" method="POST" actions="{{route('posts.destroy',$post['id'])}}">
        @csrf
        @method('DELETE')
        
        <button type="submit"  class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection
