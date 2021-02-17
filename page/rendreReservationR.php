<?php

use App\Table\TableMaterielReservation;

$rm = new TableMaterielReservation();
$rm->rendreReservation(0, intval($_GET['id_r']));
header('Location: entraineur.php?p=matReservation');
