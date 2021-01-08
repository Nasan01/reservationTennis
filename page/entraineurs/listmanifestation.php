<?php
if (isset($_GET['type'])){
    if($_GET['type'] == 'stage'){
        $type = $_GET['type'];
    }elseif ($_GET['type'] == 'tournoi'){
        $type = $_GET['type'];
    }
}else{
    $type = "stage";
}
if(isset($_GET['isany'])){
    $isany = (int) $_GET['isany'];
    if($isany <= 0){
        $isany = 0;
    }elseif ($isany >= \App\Table\TableManifestation::getCountManifestation()){
        $isany = \App\Table\TableManifestation::getCountManifestation();
    }
}else{
    $isany = 0;
}
?>
<div class="row container">
    <div class="col-md-8 col-md-offset-4">
        <h1>Manifestation ici oh</h1>
        <div class="row" id="myparent">
            <div class="col-md-3">
                <div>mini-details</div>
                <div>Horaires</div>
                <div>Organisteur</div>
                <div>Tranche d'age</div>
                <div>Niveau requis</div>
                <div>Effectif min-max</div>
                <div>Animateurs</div>
                <div>Nb inscrits</div>
                <div>S'inscrire</div>
                <div>courts utiliser</div>
                <div>Materiel utilisé</div>
            </div>
            <div class="col-md-5">
                <?php foreach (\App\Table\TableManifestation::getManifestation($isany, 1, $type) as $value):?>

                <div><?= $value->titre_manifestation; ?></div>
                <div><?= $value->horaire_manifestation; ?></div>
                <div><?= $value->organisateur_manifestation; ?></div>
                <div><?= $value->tranche_age_manifestation; ?></div>
                <div><?= $value->niveau_req_manifestation; ?></div>
                <div><?= $value->effectif_manifestation; ?></div>
                <div><?= $value->animateur_manifestation; ?></div>
                <div><?= $value->nbre_inscrit; ?></div>
                <div><a href="index.php?di=<?= "$value->id_manifestation";?>"><?= "s'inscrire";?></a></div>
                <div><?= $value->court_manifestation; ?></div>
                <div><?= $value->materiel_manifestation; ?></div>

                <?php endforeach;?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                <div class="pager">
                    <ul>
                        <li><a href="entraineur.php?p=listmanifestation&isany=<?= $isany-1?>">manifestation precedent</a></li>
                        <li><a href="entraineur.php?p=listmanifestation&isany=<?= $isany+1?>">manifestation suivant</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
