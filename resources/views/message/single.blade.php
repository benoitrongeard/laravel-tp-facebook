	<div class="panel panel-default">
		<div class="panel-heading">{{ Auth()->user()->name }} - {{ $message->created_at->diffForHumans() }}</div>
		<div class="panel-body">

			<div class="message">
				{{ $message->content }}
            </div>
            <form method="post" action="{{ route('messages.likes.store', ['message' => $message]) }}">
                {{ csrf_field() }}
				{{-- si les likes sont > 0 alors on affiche le nombre de likes(s) --}}
				@if($message->likes)
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
				{{-- inclure la vue single du commentaire $comment --}}
			</div>
            @endforeach
			{{-- inclure la vue form du message $message --}}
		</div>
	</div>
