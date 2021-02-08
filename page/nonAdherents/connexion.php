<?php

if(isset($_POST['connexion'])){
    $in = \App\Table\TableMembre::find($_POST['login'], $_POST['mdp']);
    if($in){
        $_SESSION['id_m'] = $in->id_membre;
        $_SESSION['login_m'] = $in->login_membre;
        $_SESSION['mdp_m'] = $in->mdp_membre;
        header('Location: membre.php');
    }else{
        $error = true;
    }
}

?>

<div class="row container">
    <div class="row container">

        <div class="col-md-8 col-md-offset-2">
            <h2>Connexion</h2>
            <form action="" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="login">Login:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="login" name="login" placeholder="Enter Login">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mdp">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Enter password">
                    </div>
                </div>
                <?php if(isset($error) && $error): ?>
                    <div style="color:red;">Mauvais Login ou Mot de passe</div>
                <?php endif; ?>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="connexion" class="btn btn-success">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>