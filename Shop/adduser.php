<?php
session_start();
include './inc/adddb.php';
if(isset($_POST['login'])){
   $finduser = 'SELECT * FROM user WHERE lower(user.login) = lower("'.$_POST['login'].'")';
   $data = mysqli_query($dbcnx,$finduser);
   if ($data){
       if (mysqli_fetch_array($data)){
           $_SESSION['flag'] = 'Пользователь зарегистрирован!';
            header('Location:./registration.php');
            exit;
       }
       else{
            $_SESSION['flag'] = '';
            $adduser = 'INSERT INTO user (id, login,password, name, email, requisites) VALUES (NULL, "'.$_POST['login'].'", "'.$_POST['password'].'", "'.$_POST['name'].'", "'.$_POST['email'].'", "'.$_POST['requisites'].'");';
            $add = mysqli_query($dbcnx,$adduser);
            if($add){
                $_SESSION['login']=$_POST['login'];
                $_SESSION['password']=$_POST['password'];
                $Autorize = 'SELECT * FROM user WHERE lower(login) = lower("'.$_SESSION['login'].'") AND password = "'.$_SESSION['password'].'"';
                $AutorizeForDB =  mysqli_query($dbcnx,$Autorize);
                if($AutorizeForDB){
                    if($user = mysqli_fetch_array($AutorizeForDB)){
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['requisites'] = $user['requisites'];
                    }
                    else{
                        $_SESSION['login']=null;
                        $_SESSION['password']=null;
                    }
                }
            }
       }
   }
}
header('Location:./index.php');
exit;
?>