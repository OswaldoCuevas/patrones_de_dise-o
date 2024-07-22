<?php
 header('Content-Type: application/json');

require_once 'utils/FactoryRoutes.php';

$factoryRoutes = new FactoryRoutes();
$factoryRoutes->init();
?>
