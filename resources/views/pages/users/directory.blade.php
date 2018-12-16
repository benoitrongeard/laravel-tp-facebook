@extends('layouts.facebook')


@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">Ajouter des amis</div>
		<div class="panel-body">
			@foreach($users as $user)
				@include('user.friend', ['user' => $user])
			@endforeach
		</div>

	</div>

@endsection