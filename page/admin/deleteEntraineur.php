<?php
$delEntraineur = new \App\Table\TableEntraineur();
$delEntraineur->deleteEntraineur($_GET['id_e']);
header('Location: admin.php?p=gestionEntraineurs');