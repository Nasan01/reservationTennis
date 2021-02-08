<?php

if(isset($_SESSION['id_m'])){
    session_destroy();
    header("Location: index.php?p=connexion");
}
