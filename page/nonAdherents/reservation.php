<div class="row container">

    <div class="col-md-8 col-md-offset-3">
        <div class="container-fluid">
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
                    $isaTest = \App\Table\TableReservation::countReservation();
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
                        <li><a href="index.php?p=pager&debut=<?= $debut-7?>">semaine precedent</a></li>
                        <li><a href="index.php?p=pager&debut=<?= $debut+7?>">semaine suivant</a></li>
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
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>