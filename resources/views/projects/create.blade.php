@extends('layouts.master')
@section('content')
	<div class="container">
	    <form method="POST" action="/pojects/store">
	    	@csrf
 		 <div class="form-group">
  		 	<label for="title">Title</label>
   			<input type="text" class="form-control" name='title' aria-describedby="email Help" placeholder="Title">
   
  		</div>
  			<div class="form-group">
    		<label for="description">Description</label>
    		<input type="text" class="form-control" name="description" placeholder="Description">
  		</div>
  			<div class="form-group">
    		<label for="exampleCheck1">Due Date</label>
    		<input type="date" class="form-control" name="due_date">
    
  			</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
  		</div>
@endsection