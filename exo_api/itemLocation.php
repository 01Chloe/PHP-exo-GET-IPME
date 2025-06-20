<?php
$active = "location";

$index = "index.php";
if(!isset($_GET['location_id'])){
    header('Location: '.$index);
    die;
} else {
    $location_id = $_GET['location_id'];
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/locations/$location_id"), true);
//    var_dump($res);
}
?>
<?php include 'header.php' ?>
    <div class="container">
    <h1 class="text-center my-4">
        <?= $res['name'] ?>
    </h1>
    <div class="d-flex justify-content-between align-items-center">
        <p class="my-4 text-center">
            Type de climat :
            <?= $res['climate'] ?>
        </p>
        <p>Type de terrain :
            <?= $res['terrain'] ?>
        </p>
        <p>Surface d'eau :
            <?= $res['surface_water'] ?>
        </p>
        <p>Localisation vu dans le film :
            <?php $loc = json_decode(file_get_contents($res['films'][0]), true) ?>
            <?= $loc['title'] ?>
        </p>
    </div>
<?php include 'footer.php' ?>