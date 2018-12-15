<!DOCTYPE html>
<html lang="en">
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
				<div class="column col-sm-12 col-xs-12" id="main-blue">
					<div class="navbar navbar-blue navbar-static-top">  
						<div class="navbar-header">
						</div>

						<nav class="collapse navbar-collapse" role="navigation">
                            <ul class="nav navbar-nav">
                            </ul>
						</nav>
					</div>
					<div class="col-sm-6 col-sm-offset-3">
	                    <div class="padding">
	                        <div class="full col-sm-9">
	                            <div class="panel panel-default">
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
</body>
</html>
