<?php
 // header('Content-Type: application/json');
require_once 'config.php';
require_once 'libs/factoryRoutesPage.php';
require_once 'libs/view.php';
require_once 'libs/factoryControllers.php';
require_once 'libs/errorMessages.php';
require_once 'libs/database.php';


$factoryRoutes = new FactoryRoutesPage();
$factoryRoutes->init();
?>
