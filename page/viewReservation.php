<div class="row container">
    <div class="col-md-7 col-md-offset-3">
        <h3>Les matériels disponibles</h3>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Type de Materiel</td>
                <td>Quantité de matériel</td>
                <td>State</td>
            </tr>
            <?php foreach (\App\Table\TableMateriel::getAllMateriel() as $all):?>
                <tr>
                    <td><?= $all->type_materiel;?></td>
                    <td><?= $all->quantite_materiel;?></td>
                    <td><a href="membre.php?p=faireReservation&idMateriel=<?= $all->id_materiel; ?>">Click if you want to do an reservation</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>