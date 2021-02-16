<?php

use App\Table\TableMateriel;
use App\Table\TableMaterielReservation;

$test = TableMaterielReservation::getOneTest(intval($_GET['id_test']));
$rm = new TableMaterielReservation();
$rmRev = new TableMateriel();
$rm->rendreReservation(0, intval($_GET['id_r']));
$rmRev->updateQuantite(0, $test->materielReserver);
header('Location: membre.php?p=matReservation');
