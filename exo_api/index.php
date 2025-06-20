<?php
$active = 'movie';

$res = json_decode(file_get_contents("https://ghibliapi.vercel.app/films"), true);
//var_dump($res);

?>

<?php include 'header.php' ?>
    <div class="container">
        <div class="row">
            <?php foreach($res as $item) : ?>
            <div class="col-md-4">
               <div class="card my-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-img-top">
                            <img src="<?= $item['image'] ?>" alt=""  class="w-100">
                        </div>
                        <div class="card-title">
                            <h2 class="my-2">
                                <?= $item['title'] ?>
                            </h2>
                        </div>
                        <div class="card-text">
                            <p>
                                <?= substr($item['description'], 0, 300) ?>
                            </p>
                            <a href="item.php?film_id=<?= $item['id'] ?>">Voir le film</a>
                        </div>
                    </div>
               </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include 'footer.php' ?>

