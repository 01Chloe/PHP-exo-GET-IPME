<?php
//http://localhost:8080/exos/exo2.php?a=5&b=8
if(isset($_GET['a']) && isset($_GET['b'])) {
    echo "La somme de " . $_GET['a'] . " + " . $_GET['b'] . " fait " . $_GET['a'] + $_GET['b'];
}

?>

