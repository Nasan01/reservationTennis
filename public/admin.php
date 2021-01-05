<?php

define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();
$admin = new \App\Table\TableAdmin();


if(!$admin->is_connected()){
    \App\Table\TableAdmin::versConnexion();
}

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'connected';
}

ob_start();

if($p === 'connected'){
    $app->setTitlePage('adminPage');
    require ROOT . '/page/admin/accueilAdmin.php';
}elseif($p === 'gestionEntraineurs'){
    $app->setTitlePage('gestion entraineurs');
    require ROOT . '/page/admin/gestionEntraineur.php';
}elseif($p === 'creerEntraineur'){
    $app->setTitlePage('Entraineur Creation');
    require ROOT . '/page/admin/creerEntraineur.php';
}elseif($p === 'modifEntraineur'){
    $app->setTitlePage('Entraineur modif');
    require ROOT . '/page/admin/modifEntraineur.php';
}elseif($p === 'supprimerEntraineur'){
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteEntraineur.php';
}elseif($p === 'gestionMateriels'){
    $app->setTitlePage('Gestion Matériels');
    require ROOT . '/page/admin/gestionMateriel.php';
}elseif($p === 'ajouterMateriel'){
    $app->setTitlePage('ajout Materiel');
    require ROOT . '/page/admin/ajoutMateriel.php';
}elseif($p === 'modifMateriel'){
    $app->setTitlePage('Modifier Materiel');
    require ROOT . '/page/admin/modifMateriel.php';
}elseif($p === 'supprimerMateriel'){
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteMateriel.php';
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
