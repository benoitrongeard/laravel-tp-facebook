	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Facebook</title>

		<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/facebook.css') }}" rel="stylesheet">

		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">
					<div class="column col-sm-12 col-xs-12" id="main">
						<div class="navbar navbar-blue navbar-static-top">
							<div class="navbar-header">
								<a href="" class="navbar-brand logo">b</a>
							</div>

							<nav class="collapse navbar-collapse" role="navigation">
								<ul class="nav navbar-nav">
									<li>
										<a href="{{ route('news-feed') }}"><i class="glyphicon glyphicon-home"></i> Accueil</a>
									</li>
									<li>
										<a href="{{ route('users.show', ['users' => Auth()->user()->id]) }}" role="button" data-toggle="modal"><i class="glyphicon glyphicon-user"></i> {{ auth()->user()->name }}</a>
									</li>
									<li>
										<a href="{{ route('users.edit', ['users' => Auth()->user()->id]) }}" role="button" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i> Editer</a>
									</li>
									 <li>
										<a href="{{ route('directory') }}" role="button" data-toggle="modal"><i class="glyphicon glyphicon-th"></i> Trouver des amis</a>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
											Déconnexion
										</a>
									</li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</ul>
							</nav>
						</div>
						<div class="padding">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="padding">
									<div class="full col-sm-9">
											@include('partials.errors')
											@yield('content')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
	</html>
