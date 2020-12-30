<?php

if(isset($_SESSION['id_e'])){
    session_destroy();
    header('Location: index.php');
}
