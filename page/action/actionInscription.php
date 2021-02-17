<?php

if(isset($_POST['inscription'])){
    $_SESSION['nom_m'] = htmlspecialchars($_POST['nom']);
    $_SESSION['prenom_m'] = htmlspecialchars($_POST['prenom']);
    $_SESSION['rue_m'] = htmlspecialchars($_POST['rue']);
    $_SESSION['codePostal_m'] = htmlspecialchars($_POST['codePostal']);
    $_SESSION['ville_m'] = htmlspecialchars($_POST['ville']);
    $_SESSION['dateNaiss_m'] = htmlspecialchars($_POST['dateNaiss']);
    $_SESSION['tel_m'] = htmlspecialchars($_POST['tel']);
    $_SESSION['numFFT_l'] = htmlspecialchars($_POST['numFFT']);
    $_SESSION['login_m'] = htmlspecialchars($_POST['login']);
    $_SESSION['mdp_m'] = sha1($_POST['mdp']);

    header('Location: index.php?p=attente');
}
