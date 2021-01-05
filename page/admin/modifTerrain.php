<?php
    $oneCourt = \App\Table\TableCourt::getOneCourt($_GET['id_c']);
    if(isset($_POST['modifier'])){
        $modCourt = new \App\Table\TableCourt();
        $modCourt->modifCourt(
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['surface']),
            htmlspecialchars($_POST['etat']),
            $oneCourt->id_court
        );
        header('Location: admin.php?p=gestionCourts');
    }
?>
<div class="row container">
    <div class="col-md-3">
        <ul>
            <li><a href="admin.php">Accueil</a></li>
            <li><a href="admin.php?p=gestionEntraineurs">All entraineurs</a></li>
            <li><a href="admin.php?p=gestionMembers">All members</a></li>
            <li><a href="admin.php?p=gestionCourts">All courts</a></li>
            <li><a href="admin.php?p=gestionMateriels">All matériels</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <h2>Modifier Matériel</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">Nom du court :</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneCourt->nom_court;?>" class="form-control" id="nom" name="nom" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="surface">Surface: </label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneCourt->surface_court;?>" class="form-control" id="surface" name="surface" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="etat">Etat :</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $oneCourt->etat_court;?>" class="form-control" id="etat" name="etat" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="modifier" class="btn btn-success">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>