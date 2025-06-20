<?php
session_start();
$active = 'person';

if(!isset($_SESSION['persons_res'])) {
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/people"), true);
    //var_dump($res);
    $_SESSION['persons_res'] = $res;
}

?>

<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <?php if(isset($_SESSION['persons_res'])) : ?>
            <?php foreach($_SESSION['persons_res'] as $item) : ?>
                <div class="col-md-4">
                    <div class="card my-4" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-title">
                                <h2>
                                    <?= $item['name'] ?>
                                </h2>
                            </div>
                            <div class="card-text">
                                <a href="personItem.php?person_id=<?= $item['id'] ?>">Voir le personnage</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<?php include 'footer.php' ?>

