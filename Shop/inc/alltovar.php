<div class="listtovar">
    <div class="list">
        Каталог Товаров

<?php
if ($_SESSION['Tovar']){
    $Tovar = 'SELECT * FROM list_tovar WHERE id_type = '.$_SESSION['Tovar'];
    $alltovar = mysqli_query($dbcnx,$Tovar);
    if ($alltovar){
        while ($thistovar = mysqli_fetch_array($alltovar)){
            echo '<a onclick ="MoveTo('.$thistovar['id'].');" >'.$thistovar['name'].'</a>';
        }
    }
    else{
        echo "Ошибка!";
    }
}
    

?>
    </div>
    <div class="info">
    <?php
    
    $Tovar = 'SELECT * FROM list_tovar WHERE id_type = '.$_SESSION['Tovar'];
    $alltovar = mysqli_query($dbcnx,$Tovar);
    if ($alltovar){
        while ($thistovar = mysqli_fetch_array($alltovar)){
            echo '<div class = "tovar" id="'.$thistovar['id'].'">';
            echo '<div class = "photo"><img src='.$thistovar['photo'].' width = "512px" height="512px" alt = "'.$thistovar['name'].'"></div>';
            echo '<div class = "infotovar"><div class = "name">'.$thistovar['name'].'</div>';
            echo '<div class = "cost"> Стоимость: '.$thistovar['cost'].' рублей</div>';
            echo '<div class = "description">'.$thistovar['description'].'</div>';
    if($_SESSION['id']){
            echo '<form action = "../addtovar.php" method = "post"><button name = "add" value = "'.$thistovar['id'].'">Добавить в корзину</button></form>';
           }
            echo'</div>';
            echo '</div>';
            }
    }
    else{
        echo "Ошибка!";
    }

?>
    </div>
</div>