<?php
    if(isset($_GET['isa'])){
        $isa = $_GET['isa'];
        if($isa<0){
            $isa = 0;
        }
    }else{
        $isa = 0;
    }
?>
<div class="row container">
    <div class="col-md-8 col-md-offset-2">
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
                <?php foreach (\App\Table\TableManifestation::getManifestation($isa, 1) as $value):?>
                    <div>
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
                    </div>
                <?php endforeach;?>
            </div>

        </div>
        <div class="pager">
            <a href="entraineur.php?p=listmanifestation&isa=<?= $isa-1?>">manifestation precedent</a>
            <a href="entraineur.php?p=listmanifestation&isa=<?= $isa+1?>">manifestation suivant</a>
        </div>
    </div>
</div>
