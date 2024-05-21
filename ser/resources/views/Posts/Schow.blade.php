
@extends('layouts.app')
@section('title')Schow @endsection
@section('content')   
  <div class="card mt-4"> 
  <div class="card-header">
    Pst info
  </div>
  
  <div class="card-body">
    <h5 class="card-title">Title : {{$post['Title']}}</h5>
    <p class="card-text">Description : {{$post['Description']}}</p>
   
  </div>

  <div class="card mt-4">
  <div class="card-header">
    Post Creator info
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: Souhaib</h5>
    <p class="card-text">Email: souhaibsouhaib490@gmail.com</p>
    <p class="card-text">Created at :thursday 25th of December 1975 02:15:16 PM</p>
   
  </div>
  </div>
@endsection