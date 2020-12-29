<?php
define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();
$membre = new \App\Table\TableMembre();

var_dump($membre->is_connected());

if(!$membre->is_connected()){
    App::connectPlease();
}

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'accueil';
}

ob_start();

if($p === "accueil"){
    $app->setTitlePage('Accueil');
    require ROOT . "/page/adherents/accueil.php";
}


$content = ob_get_clean();

require ROOT . '/page/templates/default.php';