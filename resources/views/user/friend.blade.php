<form method="post" action="{{-- route pour ajouter l'utilisateur en ami à l'utilisateur courant avec la fonction route --}}">
    @csrf
    <div class="ami">
        {{-- nom de l'utilisateur --}}
        @if(!auth()->user()->friends->contains($user))
            <button type="submit" class="btn btn-primary fl-right"> <i class="glyphicon glyphicon-plus"></i></button>
        @else
            <button type="submit" class="btn btn-danger fl-right"> <i class="glyphicon glyphicon-minus"></i></button>
        @endif
    </div>
</form>
		