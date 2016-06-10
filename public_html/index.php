<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional  Bootstrap theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
				crossorigin="anonymous"/>

		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/sidebar.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"
				  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>


		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- own JavaScript -->
		<script src="js/sidebar.js"></script>
		<script src="js/javascript.js"></script>


		<title>Main Menu</title>
	</head>

	<body class="sfooter">
		<div id="wrapper">
			<div class="overlay"></div>
			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<div class="flex">
					<div id="nav-list">
						<ul class="sidebar-nav">
							<li class="sidebar-brand">
								<a href="index.php">
									<strong>AJB</strong>
								</a>
							</li>
							<li>
								<a href="index.php">Main Menu</a>
							</li>
							<li>
								<a href="stats/index.php">Stats</a>
							</li>
							<li>
								<a href="adventures/index.php">Adventures</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
				<i class="fa fa-bars fa-2x" aria-hidden="true" href="#menu-toggle" id="menu-toggle"></i>
<!--				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">X</a>-->
				<div class="sfooter-content">
					<header>

					</header>
					<main>
						<section id="Title">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="jumbotron text-center">
											<h1>Welcome!</h1>
											<p>Personal Website of Alicia J. Broadhurst</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="Hook">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="well text-center">
											<p>Welcome to my personal website! This website is aimed at those interested in learning more about me in the professional sense. You will be able to find more details about my background, as well as my past projects on the pages accessible from the sidebar. </p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="Content">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="well">
											<p>To learn more about me, click Stats! But in short, I'm extremely adaptable with a very diverse background and skillset; I can take on varied projects with ease.  Unfamiliar technology or situation? No problem! I am quick on my feet, and rapidly learn whatever is required of me. My previous experiences demonstrate that strength of that ability. My creative thinking means I can attack projects from alternate angles, and with the persistence to see them through to the end, I always find a solution.</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="well">
											<p>For my portfolio, click Adventures! This will take you to a gallery displaying the very best of my professional and personal side projects. There you will be able to find selections from my web development endeavors, not to mention other examples of what I do best. All of my adventures are kept up-to-date and display the wide variety of my skillset.</p>
										</div>
									</div>
								</div>
							</div>
						</section>

					</main>
				</div>
				<footer>
					<div class="container">
						<div class="copyright text-center">
							<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
							<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
							<br>
							&copy; AJ Broadhurst 2016
						</div>
					</div>
				</footer>
			</div>
			<!-- /#page-content-wrapper -->
		</div>

	</body>
</html>