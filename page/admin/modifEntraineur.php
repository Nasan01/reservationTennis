<?php
    $oneEntraineur = \App\Table\TableEntraineur::getoneEntraineur($_GET['id_e']);
    if(isset($_POST['modifier'])){
        $newModif = new \App\Table\TableEntraineur();
        $newModif->modifierEntraineur(
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['login']),
            sha1($_POST['mdp']),
            $oneEntraineur->id_entraineur
        );
        header('Location: admin.php?p=gestionEntraineurs');
    }
?>
<div class="row container">
    <div class="col-md-3">
        <ul>
            <li><a href="admin.php">Accueil</a></li>
            <li><a href="admin.php?p=gestionEntraineurs">All entraineurs</a></li>
            <li><a href="admin.php?p=gestionMembers">All members</a></li>
            <li><a href="admin.php?p=gestionCourts">All courts</a></li>
            <li><a href="admin.php?p=gestionMateriel">All matériels</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <h2>Modifier un entraineur</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">Nom :</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneEntraineur->nom_entraineur; ?>" class="form-control" id="nom" name="nom" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prenom">Prenom :</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneEntraineur->prenom_entraineur; ?>" class="form-control" id="prenom" name="prenom" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="login">login:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneEntraineur->login_entraineur; ?>" class="form-control" id="login" name="login" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mdp">password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="mdp" name="mdp" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="modifier" class="btn btn-info">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>