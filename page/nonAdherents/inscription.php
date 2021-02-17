<?php

if(isset($_POST['inscription'])){
    /*
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
    */
    $newMembre = new \App\Table\TableMembre();
    $newMembre->addMembre(
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['prenom']),
        htmlspecialchars($_POST['rue']),
        htmlspecialchars($_POST['codePostal']),
        htmlspecialchars($_POST['ville']),
        htmlspecialchars($_POST['dateNaiss']),
        htmlspecialchars($_POST['tel']),
        htmlspecialchars($_POST['numFFT']),
        htmlspecialchars($_POST['login']),
        sha1($_POST['mdp'])
    );
    $in = \App\Table\TableMembre::find($_POST['login'], $_POST['mdp']);
    $_SESSION['id_m'] = $in->id_membre;
    $_SESSION['login_m'] = $in->login_membre;
    $_SESSION['mdp_m'] = $in->mdp_membre;
    header("Location: membre.php");
}

?>
<div class="row container">

    <div class="col-md-8 col-md-offset-2">
        <h2>Inscription</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">nom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" id="nom" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">prenom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenom" id="prenom" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rue">rue :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="rue" id="rue" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="codePostal">Code Postal :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="codePostal" id="codePostal" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ville">Ville :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ville" id="ville" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dateNaiss">Date de :naissance </label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dateNaiss" id="dateNaiss" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tel">Telephone :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tel" id="tel" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="numFFT">Numéro FFT :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="numFFT" id="numFFT" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="login">Login :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="login" id="login" required="required">
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
                    <button type="submit"  name="inscription" class="btn btn-default">Je m'inscris</button>
                    <button type="button" data-toggle="modal" class="btn btn-info" data-target="#myModal">Wait</button>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirmation de l'inscription</h4>
                        </div>
                        <div class="modal-body">
                            <p>Votre demandes a bien été envoyer! .</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Confirmer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>