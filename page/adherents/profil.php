<?php
    $aboutMembre = \App\Table\TableMembre::getAboutMembre($_SESSION['id_m']);
?>
<div class="row container">
    <div class="row">

        <div class="col-md-8 col-md-offset-3">
            <div class="row">
                <h3><b>Nom: </b><?= $aboutMembre->nom_membre;?> </h3>
                <h3><b>Prenom: </b><?= $aboutMembre->prenom_membre;?> </h3>
                <h3><b>Rue: </b><?= $aboutMembre->rue_membre;?> </h3>
                <h3><b>Code Postal: </b><?= $aboutMembre->codePostal_membre;?> </h3>
                <h3><b>ville: </b><?= $aboutMembre->ville_membre;?> </h3>
                <h3><b>Date de Naissance: </b><?= $aboutMembre->dateNaiss_membre;?> </h3>
                <h3><b>Télephone: </b><?= $aboutMembre->tel_membre;?> </h3>
                <h3><b>NuméroFFT: </b><?= $aboutMembre->numFFT_membre;?> </h3>
                <h3><b>login: </b><?= $aboutMembre->login_membre;?> </h3>
            </div>
            <p class="text-right"><a href="membre.php?p=modification">Modifier les informations personnels</a></p>
        </div>
    </div>
</div>