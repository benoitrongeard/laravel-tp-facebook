<form method="post" action="{{-- route pour ajouter l'utilisateur en ami à l'utilisateur courant avec la fonction route --}}">
    {{ csrf_field() }}
    <div class="ami">
        {{-- nom de l'utilisateur --}}
        @if(!auth()->user()->friends->contains($user))
            <button type="submit" class="btn btn-primary fl-right"> <i class="glyphicon glyphicon-plus"></i></button>
        @endif
    </div>
</form>
		