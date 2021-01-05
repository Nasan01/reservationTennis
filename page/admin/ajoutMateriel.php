<?php
    if(isset($_POST['ajouter'])){
        $materiel = new \App\Table\TableMateriel();
        $materiel->addMateriel(htmlspecialchars($_POST['type']), intval($_POST['quantite']));
        header('Location: admin.php?p=gestionMateriels');
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
        <h2>Ajouter materiel</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="type">Type materiel :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" name="type" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="quantite">quantite :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="quantite" placeholder="please, entrer un nombre" name="quantite" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="ajouter" class="btn btn-info">Ajouter</button>
                </div>
            </div>
        </form>
    </div>
</div>