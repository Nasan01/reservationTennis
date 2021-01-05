<div class="row container">
    <div class="col-md-3">
        <ul>
            <li><a href="admin.php">Accueil</a></li>
            <li><a href="admin.php?p=gestionEntraineurs">All entraineurs</a></li>
            <li><a href="admin.php?p=gestionMembers">All members</a></li>
            <li><a href="admin.php?p=gestionCourts">All courts</a></li>
            <li><a href="admin.php?p=gestionMateriels">All matériels</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <h2>Gestion des matériels</h2>
        <p><a href="admin.php?p=ajouterMateriel">Ajouter des matériels</a></p>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Type de Materiel</td>
                <td>Quantité de matériel</td>
                <td>modifier</td>
                <td>supprimer</td>
            </tr>
            <?php foreach (\App\Table\TableMateriel::getAllMateriel() as $all):?>
                <tr>
                    <td><?= $all->type_materiel;?></td>
                    <td><?= $all->quantite_materiel;?></td>
                    <td><a href="admin.php?p=modifMateriel&id_m=<?= $all->id_materiel;?>">modifier</a></td>
                    <td><a href="admin.php?p=supprimerMateriel&id_m=<?= $all->id_materiel;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>