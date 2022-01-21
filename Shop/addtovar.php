<?php
session_start();
include './inc/adddb.php';
if(isset($_POST['add'])){
    $addtobusket = 'INSERT INTO basket (id_u, id_t) VALUES ('.$_SESSION['id'].', '.$_POST['add'].')';
    $data = mysqli_query($dbcnx,$addtobusket);
    
}
header('Location:../pageTovar.php');
exit;
?>