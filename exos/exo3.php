<?php
//http://localhost:8080/exos/exo3.php?couleur=red

if(isset($_GET['couleur'])) {
    $myColor = $_GET['couleur'];
    echo "<p style='color:$myColor;'> Ceci est un texte coloré</p>";
} else {
    echo "<p style='color:black;'> Ceci n'est pas un texte coloré</p>";
}

?>