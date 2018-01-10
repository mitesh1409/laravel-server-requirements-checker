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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel 5.5 System Requirements Checker</title>
</head>
<body>
	<h1>Laravel 5.5 System Requirements Checker</h1>

	<?php
	if ($requirementsPassed) {
		echo "<p>All system requirements are satisfied.</p>";
	} else {
		echo "<p>Some of the system requirements are missing.</p>";
	}
	?>

	<ul>
		<li>
			<?php
			echo $phpVerRequirements["description"];
			echo " -- ";
			echo $phpVerRequirements['passed'] ? "PASSED" : "FAILED";
			?>
		</li>

		<?php
		foreach ($extRequirements as $extRequirement) { ?>
			<li>
				<?php
				echo $extRequirement["description"];
				echo " -- ";
				echo $extRequirement["passed"] ? "PASSED" : "FAILED";
				?>
			</li>
		<?php
		} ?>
	</ul>
</body>
</html>