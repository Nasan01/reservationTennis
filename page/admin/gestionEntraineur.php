<div class="row container">
    <div class="col-md-3">
        <ul>
            <li><a href="admin.php">Accueil</a></li>
            <li><a href="admin.php?p=gestionEntraineurs">All entraineurs</a></li>
            <li><a href="admin.php?p=gestionMembers">All members</a></li>
            <li><a href="admin.php?p=gestionCourts">All courts</a></li>
            <li><a href="admin.php?p=gestionMateriel">All matériels</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <h1>Gestion des Entraineurs</h1>
        <p>
            <a href="admin.php?p=creerEntraineur">Créer Entraineurs</a>
        </p>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Nom Entraineurs</td>
                <td>Prenom Entraineurs</td>
                <td>modifier</td>
                <td>supprimer</td>
            </tr>
            <?php foreach (\App\Table\TableEntraineur::getAllwithLimit(0) as $all):?>
                <tr>
                    <td><?= $all->nom_entraineur;?></td>
                    <td><?= $all->prenom_entraineur;?></td>
                    <td><a href="admin.php?p=modifEntraineur&id_e=<?= $all->id_entraineur;?>">modifier</a></td>
                    <td><a href="admin.php?p=supprimer&id_e=<?= $all->id_entraineur;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>