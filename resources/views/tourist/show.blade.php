@extends('layouts.newapp')
@section('title','Read the full review')
@section('body')
	<br>
	
	<br>
	
	
	
	<ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h1>{{$item->title}}</h1><br>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h3>Country:{{$item->country}}</h3>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <h4>Place:{{$item->place}}</h4>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <p>Review:{{$item->body}}</p>
		  </li>

		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <b><p>Written By : {{$item->email}}</p></b>
		  </li>


	</ul>
@endsection