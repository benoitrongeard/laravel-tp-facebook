	<div class="panel panel-default">
		<div class="panel-heading">{{ $message->user->name }} - {{ $message->created_at->diffForHumans() }}</div>
		<div class="panel-body">

			<div class="message">
				{{ $message->content }}
            </div>
            <form method="post" action="{{ route('messages.likes.store', ['message' => $message]) }}">
                {{ csrf_field() }}
				@if(count($message->likes) > 0)
					{{ count($message->likes) }}
				@endif
                <button type="submit" class="btn btn-default right">
					@if($message->liked())
						Je n'aime plus
					@else
						J'aime
					@endif
					<i class="glyphicon glyphicon-thumbs-up"></i></button>
            </form>


            @foreach($message->comments as $comment)
			<div class="padding commentaires">
				@include('comment.single', ['comment' => $comment])
			</div>
            @endforeach
			@include('comment.form', ['message' => $message])
		</div>
	</div>
