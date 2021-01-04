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
        header{
            font-family: aakar;
            border: 1px solid #ff7272;
            border-radius: 7px;
            background: #2f141d;
            box-shadow:  rgba(0, 0, 0, 0.5) 0 0 50px 0;
            height: 66px;
            color: aliceblue;
            text-align: center;
        }
        footer{
            color: aliceblue;
            border: 1px solid #ff7272;
            border-radius: 7px;
            height: 60px;
            padding: 12px;
            background: #683535;
            box-shadow:  rgba(0, 0, 0, 0.7) 0 0 50px 0;
        }
        a{
            color: #23b7bb;
        }
        #all{
            background: url("../public/images/tennis 2.jpeg");
            color: antiquewhite;
        }
    </style>
</head>
<body>
    <div id="all" class="container-fluid">
        <header class="row">
            <h1>Centre de ... d'un club de tennis</h1>
        </header>
        <div class="row">
            <?= $content;?>
        </div>
        <footer class="row">
            <p class="text-center">Big thanks for the author</p>
        </footer>
    </div>
</body>
</html>