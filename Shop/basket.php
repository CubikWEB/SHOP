<?php
if(isset($_SESSION['id']))
{include './inc/head.php';
include './inc/top.php';
include './inc/mybasket.php';
include './inc/footer.php';
}
else{
header('location:./index.php');
}
?>