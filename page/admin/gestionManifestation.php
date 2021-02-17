<div class="row container">
    <div class="col-md-8 col-md-offset-3">
        <h2>Gestion des manifestations</h2>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <th>Titre Manifestation</th>
                <th>Type Manifestation</th>
                <th>Horaire</th>
                <th>Organisateur</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach (\App\Table\TableManifestation::getAllManif() as $all):?>
                <tr>
                    <td><?= $all->titre_manifestation;?></td>
                    <td><?= $all->type_manifestation;?></td>
                    <td><?= $all->horaire_manifestation;?></td>
                    <td><?= $all->organisateur_manifestation;?></td>
                    <td><a href="admin.php?p=deleteManifestation&idManif=<?= $all->id_manifestation;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
