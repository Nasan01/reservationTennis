<?php
$apropos = \App\Table\TableMembre::getAboutMembre($_SESSION['id_m']);
if(isset($_POST['modifier'])){
    $membre = new \App\Table\TableMembre();
    $membre->modifierAbout(
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['prenom']),
        htmlspecialchars($_POST['rue']),
        htmlspecialchars($_POST['codePostal']),
        htmlspecialchars($_POST['ville']),
        htmlspecialchars($_POST['dateNaiss']),
        htmlspecialchars($_POST['tel']),
        htmlspecialchars($_POST['numFFT']),
        htmlspecialchars($_POST['login']),
        sha1($_POST['mdp']),
        $_SESSION['id_m']
    );
    $_SESSION['login_m'] = $apropos->login_membre;
    header('Location: membre.php');
}
?>
<div class="row container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <h2>Modifier my profil</h2>
            <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nom">nom :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->nom_membre;?>" name="nom" id="nom" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nom">prenom :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->prenom_membre;?>" name="prenom" id="prenom" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="rue">rue :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->rue_membre;?>" name="rue" id="rue" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="codePostal">Code Postal :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->codePostal_membre;?>" name="codePostal" id="codePostal" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ville">Ville :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->ville_membre;?>" name="ville" id="ville" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="dateNaiss">Date de :naissance </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" value="<?= $apropos->dateNaiss_membre;?>" name="dateNaiss" id="dateNaiss" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tel">Telephone :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->tel_membre;?>" name="tel" id="tel" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="numFFT">Numéro FFT :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->numFFT_membre;?>" name="numFFT" id="numFFT" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="login">Login :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $apropos->login_membre;?>" name="login" id="login" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="mdp" id="mdp"  required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit"  name="modifier" class="btn btn-info">modifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
