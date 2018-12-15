@extends('layouts.visitor')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group text-center col-sm-12 padding">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <input class="form-control input-lg" type="password" placeholder="Mot de passe" name="password">
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <button class="btn btn-lg btn-primary" type="submit">Se connecter</button>
    </div>

    <div class="input-group text-center col-sm-12 padding">
        <a href="register">Si vous n'avez pas de compte inscrivez vous ici</a>
    </div>
</form>
@endsection
