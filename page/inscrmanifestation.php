<?php
$inscrit = false;

if(!isset($_SESSION['temp'])){
    $manif = \App\Table\TableManifestation::getOne($_GET['di']);
    \App\Table\TableManifestation::addInscrit($_GET['di'], $manif->nbre_inscrit);
    $inscrit = true;
    $_SESSION['temp'] = 'existe';
}
header('Location: index.php?p=manifestation');
