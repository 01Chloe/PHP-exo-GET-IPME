<?php
$active = 'vehicles';

$index = "index.php";
if(!isset($_GET['vehicle_id'])){
    header('Location: '.$index);
    die;
} else {
    $vehicle_id = $_GET['vehicle_id'];
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/vehicles/$vehicle_id"), true);
//    var_dump($res);
}

?>

<?php include 'header.php' ?>
<div class="container">
    <h1 class="text-center my-4">
        <?= $res['name'] ?>
    </h1>
    <p class="my-4 text-center">
        <?= $res['description'] ?>
    </p>
    <div class="d-flex justify-content-between">
        <p>Date de véhicule :
            <?= $res['vehicle_class'] ?>
        </p>
        <p>Taille :
            <?= $res['length'] ?>
        </p>
        <p>Piloté par :
            <?php $pilot = json_decode(file_get_contents($res['pilot']), true) ?>
            <?= $pilot['name'] ?>
        </p>
        <p>Dans le film :
            <?php $film = json_decode(file_get_contents($res['films'][0]), true) ?>
            <?= $film['title'] ?>
        </p>
    </div>
<?php include 'footer.php' ?>
