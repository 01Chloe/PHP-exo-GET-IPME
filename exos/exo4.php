<?php
//http://localhost:8080/exos/exo4.php?a=10&b=2&op=div

if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['op'])) {
    switch ($_GET['op']) {
        case 'add':
            echo $_GET['a'] + $_GET['b'];
            break;
        case 'sub':
            echo $_GET['a'] - $_GET['b'];
            break;
        case 'mul':
            echo $_GET['a'] * $_GET['b'];
            break;
        case 'div':
            if($_GET['a'] == 0 || $_GET['b'] == 0){
                echo "Division par 0 impossible";
                break;
            } else {
                echo $_GET['a'] / $_GET['b'];
                break;
            }
    }
}


?>