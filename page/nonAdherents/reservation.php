<div class="row container">
    <div class="col-md-3">
        <div class="row">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Réservation</a></li>
                <li><a href="#">Manifestation</a></li>
                <li><a href="#">S'inscrire (Nouvel utilisateur)</a></li>
                <li><a href="#">Connexion</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="container-fluid">
            <pre>
                <?php var_dump(\App\Table\TableReservation::getLastReservation());?>
            </pre>
        </div>
    </div>
</div>