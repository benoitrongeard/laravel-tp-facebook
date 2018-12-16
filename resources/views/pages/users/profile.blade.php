@extends('layouts.facebook')

@section('content')
    <h2>Profil de : {{Auth::user()->name}}</h2>
    @include('user.single', ['messages' => $messages])
@endsection