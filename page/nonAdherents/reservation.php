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
                <table class="table-bordered">
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
                    <tr>
                        <td>Plage Horaire / Jour</td>
                    </tr>
                    <?php foreach (\App\Table\TableDateHeure::getAll() as $value):?>
                        <tr>
                            <td><?= $value->horaire;?></td>
                            <td><?= $value->nbrReservation;?> courts libre(s)</td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>