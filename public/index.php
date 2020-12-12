<?php

define('ROOT', dirname(__DIR__));
require '../app/App.php';

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
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
