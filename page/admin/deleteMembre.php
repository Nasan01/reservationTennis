<?php
$supMembre = new \App\Table\TableMembre();
$supMembre->deleteMembre($_GET['id_mem']);
header('Location: admin.php?p=gestionMembers');
