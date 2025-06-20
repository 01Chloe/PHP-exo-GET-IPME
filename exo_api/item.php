<?php
session_start();
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
        <h2 class="my-2"><span class="fs-4 fw-normal">Titre original : </span><?= $res['original_title'] ?></h2>
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
        <ul class="list-group my-4">
            <?php $check_id = explode("/", $res['people'][0]) ?>
            <?php if($res['people'] && $check_id[4]) : ?>
                <?php foreach ($res['people'] as $key => $people) : ?>
                    <li class="list-group-item text-center">
                        <?php $pers = json_decode(file_get_contents($res['people'][$key]), true) ?>
                        <?php $perso_id = explode("/", $res['people'][$key]) ?>
                        <a href="personItem.php?person_id=<?= $perso_id[4]?>">
                            <?= $pers['name'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
<?php include 'footer.php' ?>

