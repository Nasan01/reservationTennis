<?php

    if(isset($_POST['creer'])){
        $manif = new \App\Table\TableManifestation();
        $manif->addManifestation(
                htmlspecialchars($_POST['titre']),
                htmlspecialchars($_POST['type']),
                htmlspecialchars($_POST['horaire']),
                htmlspecialchars($_POST['organisateur']),
                htmlspecialchars($_POST['tranche']),
                htmlspecialchars($_POST['niveau']),
                htmlspecialchars($_POST['effectif']),
                htmlspecialchars($_POST['animateur']),
                htmlspecialchars($_POST['court']),
                htmlspecialchars($_POST['materiel'])
        );
        header('Location: entraineur.php?p=listmanifestation');
    }
?>
<div class="row container">
    <div class="col-md-8 col-md-offset-2">
        <h2 style="color: rgba(61,111,1,0.84);">Créer des manifestations(stage/tournoi/etc)</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Titre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="date" name="titre" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Type:</label>
                <div class="col-sm-10">
                    <select name="type" id="type" class="form-control" style="color: black;">
                        <option value="stage">stage</option>
                        <option value="tournoi">tournoi</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="horaire">Horaires:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horaire" name="horaire" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="organisateur">organisateur:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="organisateur" name="organisateur" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tranche">Tranche d'age:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tranche" name="tranche" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="niveau">niveau requis:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="niveau" name="niveau" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="effectif">Effectif:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="effectif" name="effectif" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="animateur">animateur:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="animateur" name="animateur" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="court">court:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="court" name="court" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="materiel">matériel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="materiel" name="materiel" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="creer" class="btn btn-info">Créer</button>
                </div>
            </div>
        </form>
        <p class="text-right"><a href="entraineur.php?p=listmanifestation">ALL manifestation</a></p>
    </div>
</div>
