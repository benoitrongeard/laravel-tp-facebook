
@include('message.form')

<h3>Mes messages</h3>

@foreach($messages as $message)
    @include('message.single', ['message' => $message])
@endforeach