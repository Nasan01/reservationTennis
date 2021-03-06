<?php

define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();
$admin = new \App\Table\TableAdmin();


if (!$admin->is_connected()) {
    \App\Table\TableAdmin::versConnexion();
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'connected';
}

ob_start();

if ($p === 'connected') {
    $app->setTitlePage('adminPage');
    require ROOT . '/page/admin/accueilAdmin.php';
} elseif ($p === 'gestionEntraineurs') {
    $app->setTitlePage('gestion entraineurs');
    require ROOT . '/page/admin/gestionEntraineur.php';
} elseif ($p === 'creerEntraineur') {
    $app->setTitlePage('Entraineur Creation');
    require ROOT . '/page/admin/creerEntraineur.php';
} elseif ($p === 'modifEntraineur') {
    $app->setTitlePage('Entraineur modif');
    require ROOT . '/page/admin/modifEntraineur.php';
} elseif ($p === 'supprimerEntraineur') {
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteEntraineur.php';
} elseif ($p === 'gestionMateriels') {
    $app->setTitlePage('Gestion Matériels');
    require ROOT . '/page/admin/gestionMateriel.php';
} elseif ($p === 'ajouterMateriel') {
    $app->setTitlePage('ajout Materiel');
    require ROOT . '/page/admin/ajoutMateriel.php';
} elseif ($p === 'modifMateriel') {
    $app->setTitlePage('Modifier Materiel');
    require ROOT . '/page/admin/modifMateriel.php';
} elseif ($p === 'supprimerMateriel') {
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteMateriel.php';
} elseif ($p === 'gestionCourts') {
    $app->setTitlePage('Gestionterrain');
    require ROOT . '/page/admin/gestionTerrain.php';
} elseif ($p === 'ajouterTerrain') {
    $app->setTitlePage('ajouter un terrain');
    require ROOT . '/page/admin/ajoutTerrain.php';
} elseif ($p === 'modifCourt') {
    $app->setTitlePage('Modifier un terrain');
    require ROOT . '/page/admin/modifTerrain.php';
} elseif ($p === 'supprimerCourt') {
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteTerrain.php';
} elseif ($p === 'gestionMembers') {
    $app->setTitlePage('gestion Membres');
    require ROOT . '/page/admin/gestionMember.php';
} elseif ($p === 'supprimerMembre') {
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteMembre.php';
} elseif ($p === 'deconnexion') {
    require ROOT . '/page/admin/deconnexion.php';
} elseif ($p === 'gestionManifestations') {
    $app->setTitlePage('manifestation gestion');
    require ROOT . '/page/admin/gestionManifestation.php';
} elseif ($p === 'deleteManifestation') {
    $app->setTitlePage('none');
    require ROOT . '/page/admin/deleteManifestation.php';
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
