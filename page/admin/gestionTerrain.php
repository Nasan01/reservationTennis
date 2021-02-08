<div class="row container">
    <div class="col-md-8 col-md-offset-2">
        <h2>*Gestion des terrains*</h2>
        <p><a href="admin.php?p=ajouterTerrain">Ajouter un terrain</a></p>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Nom du court</td>
                <td>Surface</td>
                <td>Etat</td>
                <td>modifier</td>
                <td>supprimer</td>
            </tr>
            <?php foreach (\App\Table\TableCourt::getAllCourt() as $all):?>
                <tr>
                    <td><?= $all->nom_court;?></td>
                    <td><?= $all->surface_court;?></td>
                    <td><?= $all->etat_court;?></td>
                    <td><a href="admin.php?p=modifCourt&id_c=<?= $all->id_court;?>">modifier</a></td>
                    <td><a href="admin.php?p=supprimerCourt&id_c=<?= $all->id_court;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
