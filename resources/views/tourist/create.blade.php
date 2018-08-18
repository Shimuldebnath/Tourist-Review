@extends('layouts.newapp')
@section('title','Submit your review')
@section('body')
<br>
	<div class="container">
	<br>
	<br>
		<a href="/tourist" class="btn btn-info">Back</a>
		@include('tourist.errors')
	</div>


	<div class="col-lg-4 col-lg-offset-4">
		<h2>{{ucfirst(substr(Route::currentRouteName(),8))}} Review</h2>
		<form class="form-horizontal" action="/tourist/@yield('editID')" method="post">
		{{csrf_field()}}
		@section('editMethod')
		@show
  			<fieldset>
			    <div class="form-group">
			      <label for="country">Country</label>
			      <input type="text" class="form-control" id="country" name="country" value="@yield('Editcountry')" placeholder="Enter country">
			    </div>
			    
			    <div class="form-group">
			      <label for="place">Tourist Place</label>
			      <input type="text" class="form-control" id="place" name="place" value="@yield('Editplace')" placeholder="Enter spot">
			    </div>

			    <div class="form-group">
			      <label for="title">Title</label>
			      <input type="text" class="form-control" id="title" name="title" value="@yield('Edittitle')" placeholder="Enter title">
			    </div>


			    <div class="form-group">
			      <label for="Textarea">Review</label>
			      <textarea class="form-control" id="Textarea" name="body" rows="5" placeholder="Enter review">@yield('Editbody')</textarea>
			    </div>

				<div class="form-group">
			      <label for="email">Email address</label>
			      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			    </div>
  
      
    			<button type="submit" class="btn btn-success">Submit</button>
  			</fieldset>
		</form>
		
	</div>
@endsection