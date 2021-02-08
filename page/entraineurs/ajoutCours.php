<?php
    if(isset($_POST['ajouterCours'])){
        $addCours = new \App\Table\TableCours();

        $addCours->addCours(

            htmlspecialchars($_POST['nomC8_10']),
            htmlspecialchars($_POST['nomC10_12']),
            htmlspecialchars($_POST['nomC12_14']),
            htmlspecialchars($_POST['nomC14_16']),
            htmlspecialchars($_POST['nomC16_18']),
            htmlspecialchars($_POST['nomC18_20']),
            htmlspecialchars($_POST['date'])
        );

        header('Location: entraineur.php?p=cours');
    }
?>
<div class="row container">
    <div class="row container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Ajouter des cours disponibles a une certain date</h2>
            <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="date">Date:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date" required="required">
                    </div>
                </div>
                <h3>Les Cours sur cette date</h3>
                <p style="color: red;">remarque:<i> les noms du cours seulement et s'il n'y a pas des cours met juste un espace</i></p>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="h8_10">8-10:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h8_10" name="nomC8_10" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="h10_12">10-12:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h10_12" name="nomC10_12" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="h12_14">12-14:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h12_14" name="nomC12_14" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="h14_16">14-16:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h14_16" name="nomC14_16" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="h16_18">16-18:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h16_18" name="nomC16_18" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="h18_20">18-20:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="h18_20" name="nomC18_20" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="ajouterCours" class="btn btn-warning">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
