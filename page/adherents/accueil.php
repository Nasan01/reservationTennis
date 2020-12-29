<div class="row container">
    <div class="row">
        <div class="col-md-3">
            <h2>Menu</h2>
            <ul>
                <li><a href="membre.php">Accueil</a></li>
                <li><a href="membre.php?p=reservation">Reservations</a></li>
                <li><a href="membre.php?p=manifestation">Manifestations</a></li>
                <li><a href="membre.php?p=profil">Mon Profil</a></li>
                <li><a href="membre.php?p=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            Bienvenue <b><?= $_SESSION['login_m'] ; ?> </b> dans notre centre de réservation de Tennis en ligne.
            <p>Ici vous pouvez voire tous les cours disponible à une certaine heures</p>
        </div>
    </div>
</div>