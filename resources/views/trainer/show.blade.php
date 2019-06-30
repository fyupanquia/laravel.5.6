@extends('layouts.app')

@section('title', 'Trainer')

@section('head_css')
	<style>
		.trainer-show-container img {
			height: 200px;
			width: 200px;
			background-color: #EFEFEF;
		}
	</style>
@endsection

@section('content')
	<div class="container trainer-show-container">
		<img src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
		<div class="text-center">
			<h5>{{$trainer->name}}</h5>
			<h1>{{$trainer->slug}}</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aut quidem, rerum pariatur eum dignissimos, magni sequi? Itaque vitae minus incidunt minima ab hic deleniti, repellat. Pariatur est iste illum.</p>
			<a href="/trainer/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
		</div>
	</div>
@endsection