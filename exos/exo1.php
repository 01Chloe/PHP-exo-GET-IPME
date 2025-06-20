<?php
//http://localhost:8080/exos/exo1.php?prenom=Marie

if(isset($_GET['prenom'])) {
    echo "Bonjour " . $_GET['prenom'];
}

?>