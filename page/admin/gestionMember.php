<div class="row container">
    <div class="col-md-8 col-md-offset-2">
        <h2>Gérer les membres</h2>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>date de naissance</td>
                <td>rue</td>
                <td>ville</td>
                <td>telephone</td>
                <td>supprimer</td>
            </tr>
            <?php foreach (\App\Table\TableMembre::getAllMembre() as $all):?>
                <tr>
                    <td><?= $all->nom_membre;?></td>
                    <td><?= $all->prenom_membre;?></td>
                    <td><?= $all->dateNaiss_membre;?></td>
                    <td><?= $all->rue_membre;?></td>
                    <td><?= $all->ville_membre;?></td>
                    <td><?= $all->tel_membre;?></td>
                    <td><a href="admin.php?p=supprimerMembre&id_mem=<?= $all->id_membre;?>">Supprimer</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
