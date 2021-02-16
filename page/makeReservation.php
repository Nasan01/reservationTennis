<?php

use App\Table\TableMateriel;
use App\Table\TableMaterielReservation;

$all = \App\Table\TableMateriel::getOneMateriel($_GET['idMateriel']);
if (isset($_POST['reserver'])) {
    $reservation = new TableMaterielReservation();
    $updateMateriel = new TableMateriel();

    if (isset($_SESSION['id_m'])) {
        $reservation->addResevation(
            intval($_SESSION['id_m']),
            0,
            $all->type_materiel,
            intval($_POST['qtAReserver']),
            1
        );
        $updateMateriel->updateQuantite(intval($_POST['qtAReserver']), $_GET['idMateriel']);
        header('Location: membre.php?p=matReservation');
    } elseif (isset($_SESSION['id_e'])) {
        $reservation->addResevation(
            0,
            $_SESSION['id_e'],
            $all->type_materiel,
            $_POST['qtAReserver'],
            1
        );
        $updateMateriel->updateQuantite(intval($_POST['qtAReserver']), $_GET['idMateriel']);
        header('Location: entraineur.php?p=matReservation');
    }
}
?>
<div class="row container">
    <div class="col-md-7 col-md-offset-3">
        <h3>Page pour effectuer la reservation</h3>
        <table class="table" style="background: #ffd482; color: rgba(10,42,46,1)">
            <tr>
                <td>Type de Materiel</td>
                <td>Quantité de matériel</td>
                <td>Quantité à réserver</td>
            </tr>
            <tr>
                <td><?= $all->type_materiel; ?></td>
                <td><?= $all->quantite_materiel; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="text" name="qtAReserver" required="required">
                        <button class="btn btn-primary" type="submit" name="reserver">Réserve</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>