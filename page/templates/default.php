<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
    <script src="../public/js/jquery-3.5.0.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <title><?= $app->getTitlePage();?></title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }
        header{
            font-family: aakar;
            border: 1px solid #171515;
            border-radius: 12px;
            background: #d29c65;
            box-shadow:  rgba(0, 0, 0, 0.5) 0 0 50px 0;
            height: 66px;
            color: aliceblue;
            text-align: center;
            position: relative;
        }
        footer{
            color: aliceblue;
            border: 1px solid #504242;
            border-radius: 7px;
            height: 60px;
            padding: 12px;
            background: #665228;
            box-shadow:  rgba(0, 0, 0, 0.7) 0 0 50px 0;
            position: relative;
        }
        a{
            color: #23b7bb;
        }
        #all{
            background: url("../public/images/tennis1.jpg") no-repeat fixed;
            color: antiquewhite;
        }
        table{
            background: #ffd482; color: rgba(10,42,46,1);
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #3d210b;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #8b7533;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
            text-decoration: underline;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        #myparent div{
            border: 1px solid #000000;
            text-align: center;
            padding: 7px;
        }


        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        ul{
            list-style-type: none;
        }

    </style>
</head>
<body>
    <div id="all" class="container-fluid">
        <?php
            if(isset($_SESSION['id_m'])){
        ?>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <li><a href="membre.php"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                <li><a href="membre.php?p=reservation">Reservations</a></li>
                <li><a href="membre.php?p=manifestation">Manifestations</a></li>
                <li><a href="membre.php?p=cours">Cours</a></li>
                <li><a href="membre.php?p=matReservation">Reserver des matériels</a></li>
                <li><a href="membre.php?p=profil">Mon Profil</a></li>
                <li><a href="membre.php?p=deconnexion"><i class="glyphicon glyphicon-log-out"></i> Deconnexion</a></li>
            </ul>
        </div>
        <?php } elseif(isset($_SESSION['id_e'])) {?>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul>
                        <li><a href="entraineur.php"><i class="glyphicon glyphicon-home"></i> Planing</a></li>
                        <li><a href="entraineur.php?p=court">Gérer les courts</a></li>
                        <li><a href="entraineur.php?p=manifestation">Créer des manifestations</a></li>
                        <li><a href="entraineur.php?p=cours">Gérer les cours</a></li>
                        <li><a href="entraineur.php?p=deconnexion"><i class="glyphicon glyphicon-log-out"></i> Deconnexion</a></li>
                    </ul>
                </div>
        <?php } elseif (isset($_SESSION['id_a'])){?>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul>
                        <li><a href="admin.php"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                        <li><a href="admin.php?p=gestionEntraineurs">All entraineurs</a></li>
                        <li><a href="admin.php?p=gestionMembers">All members</a></li>
                        <li><a href="admin.php?p=gestionCourts">All courts</a></li>
                        <li><a href="admin.php?p=gestionMateriels">All matériels</a></li>
                        <li><a href="admin.php?p=gestionManifestations">All manifestation</a></li>
                        <li><a href="admin.php?p=deconnexion"><i class="glyphicon glyphicon-log-out"></i> Deconnexion</a></li>
                    </ul>
                </div>
        <?php } else { ?>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                <li><a href="<?= 'index.php?p=reservationNonAdherents'?>"><i class="glyphicon glyphicon-credit-card"></i> Réservation</a></li>
                <li><a href="index.php?p=manifestation"><i class="glyphicon glyphicon-book"></i> Manifestation</a></li>
                <li><a href="index.php?p=inscription"><i class="glyphicon glyphicon-plus-sign"></i> S'inscrire (Nouvel utilisateur)</a></li>
                <li><a href="index.php?p=connexion"> <i class="glyphicon glyphicon-log-in"></i> Connexion</a></li>
            </ul>
        </div>
        <?php } ?>
        <header class="row" id="mainty">
            <h1>Centre de gestion d'un centre de tennis</h1>
        </header>
        <div class="row" id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
            <?= $content;?>
        </div>
        <footer class="row">
            <p class="text-center">Big thanks for the author</p>
        </footer>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
            document.getElementById('main').style.opacity = "0.5";
            document.getElementById('mainty').style.boxShadow = "rgba(0, 0, 0, 0.5) 0 0 250px 0";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById('main').style.opacity = "1";
        }
    </script>
</body>
</html>