<?php
session_start();
$active = "location";

if(!isset($_SESSION['locations_res'])){
    $res = json_decode(file_get_contents("https://ghibliapi.vercel.app/locations"), true);
    //var_dump($res);
    $_SESSION['locations_res'] = $res;
}


?>
<?php include 'header.php' ?>
    <div class="container">
        <div class="row">
            <?php if(isset($_SESSION['locations_res'])) : ?>
                <?php foreach($_SESSION['locations_res'] as $item) : ?>
                    <div class="col-md-4">
                        <div class="card my-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>
                                        <?= $item['name'] ?>
                                    </h2>
                                </div>
                                <div class="card-text">
                                    <a href="itemLocation.php?location_id=<?= $item['id'] ?>">Voir la localisation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php include 'footer.php' ?>