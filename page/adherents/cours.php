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
<div class="container">
    <div class="row">
        <div  class="col-md-8 col-md-offset-2">
            <? /*var_dump(\App\Table\TableCours::getCours(0, 2));*/ ?>
            <?php
            $isaTest = \App\Table\TableCours::countCours();
            $isaTest = (int) $isaTest;
            if (isset($_GET['debut'])){
                $debut = (int) $_GET['debut'];
                if($debut < 0){
                    $debut = 0;
                }elseif($debut > $isaTest){
                    $debut = $isaTest;
                }
            }else{
                $debut = 0;
            }
            ?>
            <div class="pager">
                <ul>
                    <li><a href="membre.php?p=pager&debut=<?= $debut-7?>">semaine precedent</a></li>
                    <li><a href="membre.php?p=pager&debut=<?= $debut+7?>">semaine suivant</a></li>
                </ul>
            </div>
            <table class="table" border="1">
                <tr>
                    <th>jour/heure</th>
                    <th>8h-10h</th>
                    <th>10h-12h</th>
                    <th>12h-14h</th>
                    <th>14h-16h</th>
                    <th>16h-18h</th>
                    <th>18h-20h</th>
                </tr>
                <?php   foreach (\App\Table\TableCours::getCours($debut, 7) as $test): ?>
                    <tr>
                        <td><?= convertDate($test->date_cours);?></td>
                        <td><?= $test->nomCours_8_10; ?> court(s) libre(s)</td>
                        <td><?= $test->nomCours_10_12;?></td>
                        <td><?= $test->nomCours_12_14;?></td>
                        <td><?= $test->nomCours_14_16;?></td>
                        <td><?= $test->nomCours_16_18;?></td>
                        <td><?= $test->nomCours_18_20;?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
