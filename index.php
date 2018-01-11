<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Let browser know website is optimized for mobile-->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Laravel 5.5 System Requirements Checker</title>

	<!--Import Google Icon Font-->
	<link type="text/css" rel="stylesheet" href="assets/css/material-icons.css">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="assets/css/app.css" media="screen,projection"/>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3>Laravel 5.5 System Requirements Checker</h3>

				<div class="divider"></div>

				<p>
					The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the <a href="https://laravel.com/docs/5.5/homestead" target="_blank">Laravel Homestead</a> virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.<br><br>
				</p>

				<div class="divider"></div>

				<p>
					However, if you are not using Homestead, you will need to make sure your server meets the following requirements:
				</p>

				<ul class="collection">
					<li class="collection-item">PHP >= 7.0.0</li>
					<li class="collection-item">OpenSSL PHP Extension</li>
					<li class="collection-item">PDO PHP Extension</li>
					<li class="collection-item">Mbstring PHP Extension</li>
					<li class="collection-item">Tokenizer PHP Extension</li>
					<li class="collection-item">XML PHP Extension</li>
				</ul>

				<blockquote>
					Note: Above information is provided here as per official Laravel Documentation (Reference: <a href="https://laravel.com/docs/5.5" target="_blank">https://laravel.com/docs/5.5</a>)
				</blockquote>

				<div class="divider"></div>

				<p>Click on the following button to check if your server meets the above requirements.</p>
				<a class="waves-effect waves-light btn" href="laravel-system-requirements-checker.php">RUN CHECKER</a>
			</div>
		</div>
	</div>

	<footer class="page-footer blue-grey darken-3">
		<div class="container">
			<div class="row">
				<div class="col s6">
					<h5 class="white-text">Github Repo</h5>
					<ul>
						<li><a class="white-text" href="https://github.com/mitesh1409/laravel-system-requirements-checker" target="_blank">https://github.com/mitesh1409/laravel-system-requirements-checker</a></li>
					</ul>
				</div>

				<div class="col s6">
					<h5 class="white-text">Contact</h5>
					<ul>
						<li><a class="white-text" href="mailto:mitesh5.mprajapati@gmail.com">mitesh5.mprajapati@gmail.com</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-copyright">
			<div class="container">
				Made by Mitesh Prajapati
			</div>
		</div>
	</footer>

	<!--Import jQuery before materialize.js-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/materialize.min.js"></script>
</body>
</html>