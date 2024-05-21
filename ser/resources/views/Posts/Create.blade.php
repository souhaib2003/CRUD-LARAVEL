@extends('layouts.app')
@section('title') @endsection
@section('content')
<form method="POST" action="{{route('posts.store')}}">
  @csrf
    
   <div class="mb-3">
     <label  class="form-label">Title</label>
     <input name='title' type="text" class="form-control">
    </div>
    
    
    <div class="mb-3">
     <label  class="form-label">Descreption</label>
     <textarea name='descreption' class="form-control" row="3"></textarea>
    </div>
    <div class="mb-3">
     <label class="form-label">Post Creator</label>
     <select name='post_creator' class="form-control">
         <option value="1">Souhaib</option>
         <option value="2">Mohamed</option>
       </select>
    </div>
     <button  class="btn btn-success">Submit</button>
    </form>
@endsection