<?php

$dblocation="localhost";
$dbname="shop";
$dbuser="root";
$dbpasswd="";
$dbcnx=mysqli_connect($dblocation,$dbuser,$dbpasswd,$dbname);
if(!$dbcnx) {
    echo "<p> База Данных не отвечает".mysqli_connect_error();
    exit();
}


?>