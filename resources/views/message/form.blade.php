<div class="well">
	<form class="form-horizontal" role="form" method="post" action="{{-- route pour créer un message en utilisant la fonction route --}}">
		<h4>What's New</h4>
		{{ csrf_field() }}
		<div class="form-group" style="padding:14px;">
			<textarea name="content" class="form-control" placeholder="Ecrire un message"></textarea>
		</div>
		<button class="btn btn-primary pull-right" type="submit">Poster</button>
        <ul class="list-inline">
            <li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li>
            <li><a href=""><i class="glyphicon glyphicon-file"></i></a></li>
            <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
        </ul>
	</form>
</div>