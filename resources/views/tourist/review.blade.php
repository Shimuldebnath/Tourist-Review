@extends('layouts.newapp')
@section('title','Reviews of different tourist spots')
@section('body')
<br>
	@include('tourist.message')
	<div class="container">
	<br>
	<br>
		<a href="tourist/create" class="btn btn-info">Add New</a>
	</div>

<div class="col-lg-6 col-lg-offset-3">
	<center><h1>Reviews:</h1></center>
	<ul class="list-group col-lg-50">
	  @foreach($tourists as $tourist)
  		<li class="list-group-item d-flex justify-content-between align-items-center">
    			<a href="{{'/tourist/'.$tourist->id}}">{{$tourist->title}}</a>
    			<span class="badge badge-primary badge-pill">{{$tourist->created_at}}</span>
          <a href="{{'/tourist/'.$tourist->id.'/edit'}}">Edit</a>
          <form class="form-group pull-right" action="{{'/tourist/'.$tourist->id}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="submit" value="delete">
          </form>
    	</li>
      @endforeach
	</ul>


</div>
@endsection