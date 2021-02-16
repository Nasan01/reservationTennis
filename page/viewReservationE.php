<div class="row container">
    <div class="col-md-7 col-md-offset-3">
        <h3>Les matériels disponibles</h3>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Type de Materiel</td>
                <td>Quantité de matériel</td>
                <td>State</td>
            </tr>
            <?php foreach (\App\Table\TableMateriel::getAllMateriel() as $all) : ?>
                <?php
                $aff = intval($all->quantite_materiel) - intval($all->quantiteReserver);
                var_dump($aff);
                if ($aff < 0) {
                    $aff = 0;
                }
                ?>
                <tr>
                    <td><?= $all->type_materiel; ?></td>
                    <td><?= $aff; ?></td>
                    <td><a href="entraineur.php?p=faireReservation&idMateriel=<?= $all->id_materiel; ?>">Click if you want to do an reservation</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="row">
            <h2 style="color: aquamarine;">Ce que vous avez reservez!</h2>
            <table class="table table-striped">
                <tr>
                    <td>Matériel Type</td>
                    <td>Quantité Réserver</td>
                    <td>statues</td>
                </tr>

                <?php foreach (App\Table\TableMaterielReservation::getReservationByEntraineur($_SESSION['id_e']) as $about) : ?>
                    <tr>
                        <td><?= $about->materielReserver; ?></td>
                        <td><?= $about->quantiteReserver; ?></td>
                        <td>
                            <?php if ($about->enReservation == 1) { ?>
                                <a href="entraineur.php?p=rendreReservation&id_r=<?= $about->id_matReservation; ?>">Rendre </a>
                            <?php } elseif ($about->enReservation == 0) { ?>
                                <p style="font-size: 1rem; color:crimson;"><b><i>Rendu (merci de votre coopération) </i></b></p>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>