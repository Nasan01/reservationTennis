<?php

define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();
$entraineur = new \App\Table\TableEntraineur();


if (!$entraineur->is_connected()) {
    \App\Table\TableEntraineur::versConnexion();
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'connected';
}

ob_start();

if ($p === 'connected') {
    $app->setTitlePage('manage your planning');
    require ROOT . '/page/entraineurs/planing.php';
} elseif ($p === 'court') {
    $app->setTitlePage('manage court(s)');
    require ROOT . '/page/entraineurs/viewmanageCourt.php';
} elseif ($p === 'deconnexion') {
    require ROOT . '/page/entraineurs/deconnexion.php';
} elseif ($p === 'ajoutCourt') {
    $app->setTitlePage('Ajouter un courts ');
    require ROOT . '/page/entraineurs/ajoutCourt.php';
} elseif ($p === 'pager') {
    $app->setTitlePage('manage court(s)');
    require ROOT . '/page/entraineurs/viewmanageCourt.php';
} elseif ($p === 'modifierCourt') {
    $app->setTitlePage('modifierCourts');
    $id_test = intval($_GET['id_test']);
    require ROOT . '/page/entraineurs/modifierCourt.php';
} elseif ($p === 'manifestation') {
    $app->setTitlePage('manifestation create');
    require ROOT . '/page/entraineurs/manifestationCreate.php';
} elseif ($p === 'listmanifestation') {
    $app->setTitlePage('list manifestation');
    require ROOT . '/page/manifestation.php';
} elseif ($p === 'cours') {
    $app->setTitlePage('cours');
    require ROOT . '/page/entraineurs/listCours.php';
} elseif ($p === 'ajoutCours') {
    $app->setTitlePage('Ajouter des cours');
    require ROOT . '/page/entraineurs/ajoutCours.php';
} elseif ($p === 'modifierCours') {
    $app->setTitlePage('modifier cours');
    require ROOT . '/page/entraineurs/modifCours.php';
} elseif ($p === 'matReservation') {
    $app->setTitlePage('Reserver des matériels');
    require ROOT . '/page/viewReservationE.php';
} elseif ($p === 'faireReservation') {
    $app->setTitlePage('make a reservation');
    require ROOT . '/page/makeReservation.php';
} elseif ($p === 'rendreReservation') {
    $app->setTitlePage('render');
    require ROOT . '/page/rendreReservationR.php';
}

$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
