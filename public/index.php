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

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = ' ';
}

ob_start();

if($p === 'accueilNonAdherents'){
    $app->setTitlePage('Accueil');
    require ROOT . '/page/nonAdherents/accueil.php';
}elseif ($p === 'reservationNonAdherents'){
    $app->setTitlePage('reservation');
    require ROOT . '/page/nonAdherents/reservation.php';
}elseif ($p === 'pager'){
    $app->setTitlePage('reservation');
    require ROOT . '/page/nonAdherents/reservation.php';
}elseif ($p === 'manifestation'){
    $app->setTitlePage('manifestation');
    require ROOT . '/page/manifestation.php';
}elseif ($p === 'inscription'){
    $app->setTitlePage('Inscription');
    require ROOT . '/page/nonAdherents/inscription.php';
}elseif($p === 'attente'){
    $app->setTitlePage('waitConfirmation');
    require  ROOT . '/page/nonAdherents/attente.php';
}elseif($p === 'connexion'){
    $app->setTitlePage('Connexion');
    require ROOT . '/page/nonAdherents/connexion.php';
}elseif($p === 'conEntraineur'){
    $app->setTitlePage('Entraineur connexion');
    require ROOT . '/page/entraineurs/connexion.php';
}elseif($p === "inscriptionManifestation"){
    $app->setTitlePage('none');
    require ROOT . '/page/inscrmanifestation.php';
}

if($action === 'inscription'){
    require  ROOT . "/page/action/actionInscription.php";
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
