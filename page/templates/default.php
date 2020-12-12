<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?= $app->getTitlePage();?></title>
</head>
<body>
    <div class="container-fluid">
        <header class="row header">
            <h1>Centre de ... d'un club de tennis</h1>
        </header>
        <div class="row">
            <?= $content;?>
        </div>
    </div>
</body>
</html>