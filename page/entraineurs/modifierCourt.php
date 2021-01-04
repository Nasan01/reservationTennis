<?php
    $allById = \App\Table\TableReservation::getTestbyId($id_test);
    var_dump($allById);
?>
<?php
if(isset($_POST['modifier'])){
    $test = new \App\Table\TableReservation();

    $test->modifCourt(
        htmlspecialchars($_POST['date']),
        htmlspecialchars($_POST['h8_10']),
        htmlspecialchars($_POST['h10_12']),
        htmlspecialchars($_POST['h12_14']),
        htmlspecialchars($_POST['h14_16']),
        htmlspecialchars($_POST['h16_18']),
        htmlspecialchars($_POST['h18_20']),
        $_GET['id_test']
    );

    header('Location: entraineur.php?p=court');
}
?>
<div class="row container">
    <div class="col-md-3">
        <div class="row">
            <h2>Menu</h2>
            <ul>
                <li><a href="entraineur.php">Planing</a></li>
                <li><a href="entraineur.php?p=court">Gérer les courts</a></li>
                <li><a href="entraineur.php?p=manifestation">Créer des manifestations</a></li>
                <li><a href="index.php?p=cours">Gérer les cours</a></li>
                <li><a href="entraineur.php?p=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <h2>Ajouter des courts disponibles</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Date:</label>
                <div class="col-sm-10">
                    <input type="date" value="<?= $allById->date;?>" class="form-control" id="date" name="date" required="required">
                </div>
            </div>
            <h3>nombre courts disponible à ces heures</h3>
            <div class="form-group">
                <label class="control-label col-sm-2" for="h8_10">8-10:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_8_10;?>" class="form-control" id="login" name="h8_10" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="h10_12">10-12:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_10_12;?>" class="form-control" id="login" name="h10_12" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="h12_14">12-14:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_12_14?>" class="form-control" id="login" name="h12_14" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="h14_16">14-16:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_14_16?>" class="form-control" id="login" name="h14_16" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="h16_18">16-18:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_16_18?>" class="form-control" id="login" name="h16_18" required="required">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="h18_20">18-20:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?= $allById->nbr_18_20?>" class="form-control" id="login" name="h18_20" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="modifier" class="btn btn-warning">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>
