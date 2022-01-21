<?php

$basket = 'SELECT * FROM basket,list_tovar WHERE basket.id_u = '.$_SESSION['id'].' AND list_tovar.id = basket.id_t';
$allbasket = mysqli_query($dbcnx,$basket);
if($allbasket){
    while($thisbasker = mysqli_fetch_array($allbasket)){
        echo '<div class="tovarinbasket">
        <div class="photo">
            <img src="'.$thisbasker['photo'].'" alt="iphone10" width = "240px" height = "240px">
        </div>
        <div class="info">
            <div class="name">
                '.$thisbasker['name'].'
            </div>
            <div class="cost">
                Цена : '.$thisbasker['cost'].' рублей
            </div>
        </div>
        <form action = "../deltovar.php" method = "post"><button name = "deltovar" value = "'.$thisbasker['id_b'].'">Удалить товар!</button></form>
    </div>';
    }
}
else{
    echo "Error";
}

$result_basket = 'SELECT  basket.id_u ,SUM(list_tovar.cost) AS summa  FROM basket,list_tovar WHERE basket.id_u = '.$_SESSION['id'].' AND list_tovar.id = basket.id_t';
$result = mysqli_query($dbcnx,$result_basket);
if($result){
    if($thisresult = mysqli_fetch_array($result)){
        echo '<div class="tovarinbasket">
                <div class="info">
                     Итоговая цена : '.$thisresult['summa'].' рублей
                </div>
                <form action="#"><button>Оплатить</button></form>
              </div>';
    }
}

?>

