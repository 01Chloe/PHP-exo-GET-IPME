<?php
$active = 'vehicles';

$res = json_decode(file_get_contents("https://ghibliapi.vercel.app/vehicles"), true);
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
                            <h2 class="my-2">
                                <?= $item['name'] ?>
                            </h2>
                        </div>
                        <div class="card-text">
                            <p>
                                <?= $item['description'] ?>
                            </p>
                            <a href="vehicleItem.php?vehicle_id=<?= $item['id'] ?>">Voir le véhicule</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php' ?>
