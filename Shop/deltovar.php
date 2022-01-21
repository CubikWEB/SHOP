<?php
include './inc/adddb.php';

if(isset($_POST['deltovar'])){
    $query_delete = 'DELETE FROM basket WHERE basket.id_b = '.$_POST['deltovar'];
    $data = mysqli_query($dbcnx,$query_delete);
    header('Location:../basket.php');
    exit;
}
?>