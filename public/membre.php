<?php
define('ROOT', dirname(__DIR__));
require '../App/App.php';


App::load();

$app = App::getInstance();
$membre = new \App\Table\TableMembre();


if (!$membre->is_connected()) {
    App::connectPlease();
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'accueil';
}

ob_start();

if ($p === "accueil") {
    $app->setTitlePage('Accueil');
    require ROOT . "/page/adherents/accueil.php";
} elseif ($p === 'profil') {
    $app->setTitlePage('profil');
    require ROOT . "/page/adherents/profil.php";
} elseif ($p === 'modification') {
    $app->setTitlePage('profilModification');
    require ROOT . "/page/adherents/modificationProfil.php";
} elseif ($p === 'deconnexion') {
    require ROOT . '/page/adherents/deconnexion.php';
} elseif ($p === 'reservation') {
    $app->setTitlePage('reservation');
    require ROOT . '/page/nonAdherents/reservation.php';
} elseif ($p === 'manifestation') {
    $app->setTitlePage('manifestation');
    require ROOT . '/page/manifestation.php';
} elseif ($p === 'cours') {
    $app->setTitlePage('Cours');
    require ROOT . '/page/adherents/cours.php';
} elseif ($p === 'pager') {
    $app->setTitlePage('Cours');
    require ROOT . '/page/adherents/cours.php';
} elseif ($p === 'matReservation') {
    $app->setTitlePage('Reservation des matériels');
    require ROOT . '/page/viewReservation.php';
} elseif ($p === 'faireReservation') {
    $app->setTitlePage('make a reservation');
    require ROOT . '/page/makeReservation.php';
} elseif ($p === 'rendreReservation') {
    $app->setTitlePage('render');
    require ROOT . '/page/rendreReservation.php';
}


$content = ob_get_clean();

require ROOT . '/page/templates/default.php';
