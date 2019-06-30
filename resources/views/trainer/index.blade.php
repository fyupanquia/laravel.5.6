@extends('layouts.app')

@section('title', 'Trainer create')

@section('head_css')
	<style type="text/css" media="screen">
			.card-img-top{
				height: 100px;
				width: 100px;
				background-color: #fff;
				margin: 20px;
			}
			.user-list-container {
				margin-top: 1.5em;
			}
	</style>
@endsection

@section('content')
	<h1>User's list</h1>
	<div class="container user-list-container">
        <div class="row">
			@foreach($trainers as $i => $trainer)
			    <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-md-4 col-lg-4 col-xl-4">
			      	<div class="card text-center">
					  <img class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-title">{{ $trainer->name }}</p>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    <a href="/trainer/{{$trainer->slug}}" class="btn btn-primary">Show more</a>
					  </div>
					</div>
			    </div>
			@endforeach
		</div>
	</div>
@endsection