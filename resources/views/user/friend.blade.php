<form method="post" action="{{ route('users.friends.store', ['user' => $user]) }}">
    {{ csrf_field() }}
    <div class="ami">
        {{ $user->name }}
        @if(!auth()->user()->friends->contains($user))
            <button type="submit" class="btn btn-primary fl-right"> <i class="glyphicon glyphicon-plus"></i></button>
        @else
            <button type="submit" class="btn btn-danger fl-right"> <i class="glyphicon glyphicon-minus"></i></button>
        @endif
    </div>
</form>
		