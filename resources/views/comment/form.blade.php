<form class="padding" method="post" action="{{ route('messages.comments.store', ['message' => $message]) }}">
    {{ csrf_field() }}
    <div class="input-group">
        <div class="input-group-btn">
            <button class="btn btn-primary">Commenter</button>
        </div>
        <input name="content" class="form-control" placeholder="Ajouter un commentaire" type="text">
    </div>
</form>
