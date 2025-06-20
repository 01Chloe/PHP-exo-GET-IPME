<?php
$active = 'movie';

$index = "index.php";
if(!isset($_GET['film_id'])){
    header('Location: '.$index);
    die;
} else {
    $film_id = $_GET['film_id'];
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/films/$film_id"), true);
//    var_dump($res);
}

?>

<?php include 'header.php' ?>
    <div class="container">
        <h1 class="text-center my-4">
            <?= $res['title'] ?>
        </h1>
        <img src="<?= $res['image'] ?>" alt="" class="w-25 d-block mx-auto">
        <p class="my-4 text-center">
            <?= $res['description'] ?>
        </p>
        <div class="d-flex justify-content-between">
            <p>Date de sortie :
                <?= $res['release_date'] ?>
            </p>
            <p>Score Rotten Tomatoes :
                <?= $res['rt_score'] ?>
            </p>
            <p>Durée du film :
                <?= $res['running_time'] ?>
            </p>
        </div>
<?php include 'footer.php' ?>

