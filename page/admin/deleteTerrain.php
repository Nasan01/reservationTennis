<?php
$delCourt = new \App\Table\TableCourt();
$delCourt->deleteCourt($_GET['id_c']);
header('Location: admin.php?p=gestionCourts');