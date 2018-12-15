	<div class="panel panel-default">
		<div class="panel-heading">{{-- nom de l'utilisateur --}} - {{-- $message->created_at->diffForHumans() --}}</div>
		<div class="panel-body">

			<div class="message">
				{{-- contenu du message --}}
            </div>
            <form method="post" action="{{-- route pour ajouter un kiff au message en utilisant la fonction route --}}">
                {{ csrf_field() }}
				{{-- si les likes sont > 0 alors on affiche le nombre de kiff(s) --}}
                <button type="submit" class="btn btn-default right">Je kiff <i class="glyphicon glyphicon-thumbs-up"></i></button>
            </form>


            @foreach($message->comments as $comment)
			<div class="padding commentaires">
				{{-- inclure la vue single du commentaire $comment --}}
			</div>
            @endforeach
			{{-- inclure la vue form du message $message --}}
		</div>
	</div>
