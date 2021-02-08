<?php
$delMateriel = new \App\Table\TableMateriel();
$delMateriel->deleteMateriel($_GET['id_m']);
header('Location: admin.php?p=gestionMateriels');
