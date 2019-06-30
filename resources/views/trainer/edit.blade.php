@extends('layouts.app')

@section('title', 'Trainer create')
@section('head_css')
	<style>
		.trainer-edit-container img {
			height: 200px;
			width: 200px;
			background-color: #EFEFEF;
		}
	</style>
@endsection
@section('content')
	<div class="container trainer-edit-container">
		<form  method="POST" action="/trainer/{{$trainer->slug}}" enctype="multipart/form-data">
		  @method("PUT")
		  @csrf()
	  		<div class="form-group">
			    <label for="name">Trainer name</label>
			    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" value="{{$trainer->name}}">
			  </div>		
	  		<div class="form-group">
			  	<img src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
			  	<label for="">Avatar</label>
	  			<input type="file" name="avatar" class="">
			</div>
		  <button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
@endsection