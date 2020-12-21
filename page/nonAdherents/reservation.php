<div class="row container">
    <div class="col-md-3">
        <div class="row">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Réservation</a></li>
                <li><a href="#">Manifestation</a></li>
                <li><a href="#">S'inscrire (Nouvel utilisateur)</a></li>
                <li><a href="#">Connexion</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
                $test = \App\Table\TableDateHeure::getTime();
                $tabDay = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                ?>

            <div class="test">
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
                    <?php   foreach (\App\Table\TableReservation::getTest(0, 7) as $test): ?>
                        <tr>
                            <td><?= convertDate($test->date);?></td>
                            <td><?= $test->nbr_8_10;?> court(s) libre(s)</td>
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