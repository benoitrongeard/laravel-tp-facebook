@extends('layouts.facebook')

@section('content')
    @include('message.form')

    @foreach($messages as $message)
        @include('message.single', ['message' => $message])
    @endforeach
@endsection