<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['version'])) {
    require_once 'ServerRequirements.php';
    
    $laravelVersion = $_POST['version'];
    $serverRequirements = new ServerRequirements($laravelVersion);
    $requirementsSatisfied = $serverRequirements->satisfied();
    $requirements = $serverRequirements->getRequirements();
    $currentPhpVersion = phpversion();

    require_once 'results.php';
} else {
    require_once 'index.php';
}
