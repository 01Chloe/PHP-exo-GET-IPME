<?php
$active = 'person';

$index = "index.php";
if(!isset($_GET['person_id'])){
    header('Location: '.$index);
    die;
} else {
    $person_id = $_GET['person_id'];
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/people/$person_id"), true);
//    var_dump($res);
}

?>

<?php include 'header.php' ?>
<div class="container">
    <h1 class="text-center my-4">
        <?= $res['name'] ?>
    </h1>
    <div class="d-flex justify-content-between">
        <p>Sexe :
            <?= $res['gender'] ?>
        </p>
        <p>Age :
            <?= $res['age'] ?>
        </p>
        <p>Couleur des yeux :
            <?= $res['eye_color'] ?>
        </p>
        <p>Couleur des cheveux :
            <?= $res['hair_color'] ?>
        </p>
        <p>Vu dans le film :
            <?php $film = json_decode(file_get_contents($res['films'][0]), true) ?>
            <?= $film['title'] ?>
        </p>
    </div>
<?php include 'footer.php' ?>

