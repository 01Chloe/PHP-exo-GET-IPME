<?php
//http://localhost:8080/exos/exo5.php?item[]=Pommes&item[]=Bananes&item[]=Cerises

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo5</title>
</head>
<body>
    <div>
        <ul>
            <?php if(isset($_GET['item'])) : ?>
                <?php foreach ($_GET['item'] as $item) : ?>
                    <li>
                        <?= $item ?>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>
