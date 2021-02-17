<?php
$delManif = new \App\Table\TableManifestation();
$delManif->deleteManifestation($_GET['idManif']);
header('Location: admin.php?p=gestionManifestations');