<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once("ServerRequirements.php");

$laravelVersion = isset($_POST["version"]) ? $_POST["version"] : "5.5";
$serverRequirements = new ServerRequirements($laravelVersion);
$requirementsSatisfied = $serverRequirements->satisfied();
$requirements = $serverRequirements->getRequirements();

require_once("results.php");
