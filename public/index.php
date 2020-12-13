<?php

use App\Table\TableReservation;

define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'accueilNonAdherents';
}

ob_start();

if($p === 'accueilNonAdherents'){
    $app->setTitlePage('Accueil');
    require ROOT . '/page/nonAdherents/accueil.php';
}elseif ($p === 'reservationNonAdherents'){
    $app->setTitlePage('reservation');
    require ROOT . '/page/nonAdherents/reservation.php';
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
