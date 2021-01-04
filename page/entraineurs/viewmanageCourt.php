<div class="row container">
    <div class="col-md-3">
        <div class="row">
            <h2>Menu</h2>
            <ul>
                <li><a href="entraineur.php">Planing</a></li>
                <li><a href="entraineur.php?p=court">Gérer les courts</a></li>
                <li><a href="entraineur.php?p=manifestation">Créer des manifestations</a></li>
                <li><a href="index.php?p=cours">Gérer les cours</a></li>
                <li><a href="entraineur.php?p=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <ul>
            <li><a href="entraineur.php?p=ajoutCourt">Ajouter des courts disponible à une date</a></li>
        </ul>
        <div class="row">
            <?php
            function convertDate($dateAConverte){
                $tabDate = explode('-', $dateAConverte);
                $jour = (int) $tabDate[2];
                $mois = (int) $tabDate[1];
                $annee = (int) $tabDate[0];
                $dateTimeStamp = mktime(0, 0, 0, $mois, $jour, $annee);
                $dateConverti = date('D-d-M-Y', $dateTimeStamp);
                return $dateConverti;
            }
            ?>
            <div class="test">
                <?php
                if (isset($_GET['debut'])){
                    $debut = (int) $_GET['debut'];
                    if($debut < 0){
                        $debut = 0;
                    }
                }else{
                    $debut = 0;
                }
                ?>
                <div class="pager">
                    <a href="entraineur.php?p=pager&debut=<?= $debut-7?>">semaine precedent</a>
                    <a href="entraineur.php?p=pager&debut=<?= $debut+7?>">semaine suivant</a>
                </div>
                <table class="table" border="1">
                    <tr>
                        <td>jour/heure</td>
                        <td>8h-10h</td>
                        <td>10h-12h</td>
                        <td>12h-14h</td>
                        <td>14h-16h</td>
                        <td>16h-18h</td>
                        <td>18h-20h</td>
                    </tr>
                    <?php   foreach (\App\Table\TableReservation::getTest($debut, 7) as $test): ?>
                        <tr>
                            <td><?= convertDate($test->date);?></td>
                            <td><?php
                                if($test->nbr_8_10 == 10){
                                    echo "vous avez reservez";
                                }else{
                                    echo $test->nbr_8_10;
                                }
                                ?> court(s) libre(s)</td>
                            <td><?= $test->nbr_10_12;?> court(s) libre(s)</td>
                            <td><?= $test->nbr_12_14;?> court(s) libre(s)</td>
                            <td><?= $test->nbr_14_16;?> court(s) libre(s)</td>
                            <td><?= $test->nbr_16_18;?> court(s) libre(s)</td>
                            <td><?= $test->nbr_18_20;?> court(s) libre(s)</td>
                            <td><a href="entraineur.php?p=modifierCourt&id_test=<?= $test->id_test;?>">Modifier</a></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>