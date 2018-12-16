<div class="commentaire">
	<div class="fb-blue">{{ $comment->user->name }} : </div> {{ $comment->content }}
	</div>
	<form method="post" action="{{route('comments.likes.store', ['message' => $comment->message, 'comment' => $comment])}}">
		{{ csrf_field() }}
		@if(count($comment->likes) > 0)
			{{ count($comment->likes) }}
		@endif
		<button type="submit" class="btn btn-default right">
			@if($comment->liked())
				Je n'aime plus
			@else
				J'aime
			@endif
			<i class="glyphicon glyphicon-thumbs-up"></i></button>
	</form>
