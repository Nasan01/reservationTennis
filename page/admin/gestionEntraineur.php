<div class="row container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Gestion des Entraineurs</h1>
        <p>
            <a href="admin.php?p=creerEntraineur">Créer Entraineurs</a>
        </p>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <th>Nom Entraineurs</th>
                <th>Prenom Entraineurs</th>
                <th>modifier</th>
                <th>supprimer</th>
            </tr>
            <?php foreach (\App\Table\TableEntraineur::getAllwithLimit(0) as $all):?>
                <tr>
                    <td><?= $all->nom_entraineur;?></td>
                    <td><?= $all->prenom_entraineur;?></td>
                    <td><a href="admin.php?p=modifEntraineur&id_e=<?= $all->id_entraineur;?>">modifier</a></td>
                    <td><a href="admin.php?p=supprimerEntraineur&id_e=<?= $all->id_entraineur;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>