<div class="commentaire">
	<div class="fb-blue">{{-- nom de l'utilisateur --}}: </div> {{-- contenu du message --}}
	</div>
	<form method="post" action="{{-- route pour ajouter un kiff sur un commentaire en utilisant la fonction route --}}">
		{{ csrf_field() }}
		{{-- si les likes sont > 0 alors on affiche le nombre de kiff(s) --}}
		<button type="submit" class="btn btn-default">Je kiff <i class="glyphicon glyphicon-thumbs-up"></i></button>
	</form>
