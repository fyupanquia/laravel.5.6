@extends('layouts.app')

@section('title', 'Trainer create')

@section('content')
	<div class="container">
		<form  method="POST" action="/trainer" enctype="multipart/form-data">
		  @csrf()
		  <div class="form-group">
		    <label for="name">Trainer name</label>
		    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		  	<label for="">Avatar</label>
		  	<input type="file" name="avatar" class="">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection