@extends('layouts.facebook')

@section('content')

<div class="panel panel-default">
	<div class="panel panel-heading">
		Modifier le profil
	</div>

	<form class="form" method="POST" action="{{ route('users.update', ['user' => $user]) }}">
	    @csrf

		<input name="_method" type="hidden" value="PUT">

		<div class="input-group text-center col-sm-12 padding">
	        <input class="form-control input-lg" type="text" name="name" placeholder="Nom"  value="{{ $user->name }}">
	    </div>

	    <div class="input-group text-center col-sm-12 padding">
	        <input class="form-control input-lg" type="email" name="email" placeholder="Email"  value="{{ $user->email }}">
	    </div>

	    <div class="input-group text-center col-sm-12 padding">
	        <input class="form-control input-lg" type="password" placeholder="Mot de passe" name="password">
	    </div>

	    <div class="input-group text-center col-sm-12 padding">
	        <input class="form-control input-lg" type="password" placeholder="Confirmer le mot de passe" name="password_confirmation">
	    </div>

	    <div class="input-group text-center col-sm-12 padding">
	        <button class="btn btn-lg btn-primary" type="submit">Modifier</button>
	    </div>
	</form>

	</div>
@endsection