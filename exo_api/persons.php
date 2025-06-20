<?php
$active = 'person';

$res = json_decode(file_get_contents("https://ghibliapi.vercel.app/people"), true);
//var_dump($res);

?>

<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <?php foreach($res as $item) : ?>
            <div class="col-md-4">
                <div class="card my-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>
                                <?= $item['name'] ?>
                            </h2>
                        </div>
                        <div class="card-text">
                            <p>Vu dans le film :
                                <?php $film = json_decode(file_get_contents($item['films'][0]), true) ?>
                                <?= $film['title'] ?>
                            </p>
                            <a href="personItem.php?person_id=<?= $item['id'] ?>">Voir le personnage</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php' ?>

