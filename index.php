<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- mobile first -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--font awesome for icons and stuff-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<!-- local js -->
		<script src="js/highcharts.js"></script>

		<!-- local css -->
		<link rel="stylesheet" href="css/stylesheets.css">


	</head>
	<body>
		<header>

			<!-- nav bar -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand"><div class="animated slideInLeft">Welcome</div></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-o">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="info.php">Info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="game.php">Game</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="diary.php">A1C Diary</a>
							</li>
						</ul>
					</div><!-- navbar-collapse -->
				</div><!-- container-fluid -->
			</nav>

				<!--documentation : https://getbootstrap.com/docs/4.0/components/navbar/ -->
		</header>
		<div>
			<img class="img-thumbnail" src="images/diabetes-star.jpg">
		</div>
		<div>
			<h3>Welcome!</h3>
		</div>
		<footer>
			<!-- documentation https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background -->
			<div class="container">
				<div class="col-4">
					<a class="button" href="info.php">
						<button type="button" class="home-buttons"><i class="fa fa-info"></i> Info  </button>
					</a>
				</div>
				<div class="col-4">
					<a class="button" href="game.php">
						<button type="button" class="home-buttons"><i class="fa fa-gamepad"></i> Game</button>
					</a>
				</div>
				<div class="col-4">
					<a class="button" href="diary.php">
						<button type="button" class="home-buttons"><i class="fa fa-area-chart"></i> Diary</button>
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>