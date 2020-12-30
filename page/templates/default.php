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
            font-family: "Droid Sans Fallback";
            background-color: #5bc0de;
            box-shadow:  rgba(0, 0, 0, 0.5) 0 0 50px 0;
            height: 66px;
            color: aliceblue;
            text-align: center;
        }
        footer{
            color: aliceblue;
            height: 60px;
            padding: 12px;
            background: #272A02;
            box-shadow:  rgba(0, 0, 0, 0.7) 0 0 50px 0;
        }
        #all{
            background: url("../public/images/tennis 2.jpeg");
            color: antiquewhite;
        }
    </style>
</head>
<body>
    <div id="all" class="container-fluid">
        <header class="row" id="test">
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