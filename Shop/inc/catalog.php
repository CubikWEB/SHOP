<?php
$query = "SELECT * FROM type_tovar";
$data = mysqli_query($dbcnx,$query);
if($data){

    while($tovar=mysqli_fetch_array($data)){
        echo '<a onclick ="OpenMenu('.$tovar['id'].');">'.$tovar['type'].'</a>';
    }
}else{
    echo "Ошибка запроса";
}
echo "</div>";
$query = "SELECT * FROM type_tovar";
$data2 = mysqli_query($dbcnx,$query);
if($data2){
    while($tovar2=mysqli_fetch_array($data2)){
        $queryToTovar = "SELECT * FROM all_type WHERE id_t = ".$tovar2['id'];
        $AllTovar = mysqli_query($dbcnx,$queryToTovar);
        if ($AllTovar){
            echo '<div class="openmenu" style = "visibility: hidden; height: 0px; border: none;">';
            echo '<form action = "../tovar.php" method = "post" > ';
                while($thisTovar = mysqli_fetch_array($AllTovar)){
                    echo '<button name = "Tovar" value = '.$thisTovar['id'].'>'.$thisTovar['type'].'</button>';
                }
            echo '</form></div>';
        }
    }
}
?>
