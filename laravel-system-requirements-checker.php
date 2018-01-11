<?php
$requirementsPassed = true;

$phpVerRequirements = [];
$phpVerRequirements["description"] = "PHP >= 7.0.0";
$phpVerRequirements["passed"] = false;

$extRequirements = [];
$extRequirements["openssl"]["name"] = "OpenSSL";
$extRequirements["openssl"]["description"] = "OpenSSL PHP Extension";
$extRequirements["openssl"]["passed"] = false;
$extRequirements["pdo"]["name"] = "PDO";
$extRequirements["pdo"]["description"] = "PDO PHP Extension";
$extRequirements["pdo"]["passed"] = false;
$extRequirements["mbstring"]["name"] = "Mbstring";
$extRequirements["mbstring"]["description"] = "Mbstring PHP Extension";
$extRequirements["mbstring"]["passed"] = false;
$extRequirements["tokenizer"]["name"] = "Tokenizer";
$extRequirements["tokenizer"]["description"] = "Tokenizer PHP Extension";
$extRequirements["tokenizer"]["passed"] = false;
$extRequirements["xml"]["name"] = "XML";
$extRequirements["xml"]["description"] = "XML PHP Extension";
$extRequirements["xml"]["passed"] = false;

// Checking PHP version requirement.
$systemVersion = phpversion();
$requiredVersion = "7.0.0";

if (version_compare($systemVersion, $requiredVersion, ">=")) {
	$phpVerRequirements["passed"] = true;
} else {
	$requirementsPassed = false;
}

// Checking PHP extensions requirements.
foreach ($extRequirements as &$extRequirement) {
	if (extension_loaded($extRequirement["name"])) {
		$extRequirement["passed"] = true;
	} else {
		$requirementsPassed = false;
	}
}
?>

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

				<?php
				if ($requirementsPassed) {
					echo "<p>All system requirements are satisfied.</p>";
				} else {
					echo "<p>Some of the system requirements are missing.</p>";
				}
				?>

				<ul class="collection">
					<li class="collection-item">
						<?php
						echo $phpVerRequirements["description"];
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						echo $phpVerRequirements['passed'] ? "<span class='passed-badge'>PASSED</span>" : "<span class='failed-badge'>FAILED</span>";
						?>
					</li>

					<?php
					foreach ($extRequirements as $extRequirement) { ?>
						<li class="collection-item">
							<?php
							echo $extRequirement["description"];
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo $extRequirement["passed"] ? "<span class='passed-badge'>PASSED</span>" : "<span class='failed-badge'>FAILED</span>";
							?>
						</li>
					<?php
					} ?>
				</ul>

				<div class="divider"></div>

				<a class="waves-effect waves-light btn" href="index.php">BACK TO HOME</a>
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