
<body>
    <header>
        <div class="mainer">
        <div class="logo" id="logo">
           <a onclick="MoveTo('logo')">My Shop</a> 
        </div>
        <div class="menu">
            <a href="../index.php" class="link">Главная</a>
            <a onclick="OpenMenu(0)" class="link">Каталоги</a>
            <a href="#" class="link">Информация</a>
            <a onclick="MoveTo('footer')" class="link">Обратная связь</a>
        </div>
        <?php
        if($_SESSION['id']){
            $count = 'SELECT COUNT(*) AS COUNT1 FROM basket WHERE id_u = '.$_SESSION['id'];
            $data = mysqli_query($dbcnx,$count);
            $thiscount = mysqli_fetch_array($data);
            echo "<div class='log' >
            <div style='font-size:18px;color:black;' id = 'myname'>Вы вошли как ".$_SESSION['name']."</div>
            <a href = '../basket.php'><img src='../im/shoppingcart.png' width='48px' height='48px' style='margin:20px;'>
            <div class = 'counttovar'>".$thiscount['COUNT1']."</div>
            </a>
            <a href = '../exit.php'><img src='../im/exit.png' width='48px' height='48px'></a>
            </div>";
        }
        
        else{
            echo '<div class="log" id="log">
            Войти
            </div>';
        }
        ?>
        </div>
        <div class="openmenu" style = 'visibility: hidden; height: 0px;border:none;'>
        <?php
            include './inc/catalog.php';
        ?>
        
    </div>
    </header>
    
    <div class="forma" id="forma" style="visibility: hidden;">
        <form action="../login.php" class="login" method="POST">
            <div class="login">
                <div class="label">
                    <label for="login">Логин:</label>               
                    <label for="password">Пароль:</label>
                </div>
                <div class="input">
                    <input type="text" name='login' class='log' required>
                    <input type="password" name='password' class='log'required>
                </div>
            </div>
            <div class="button">
                <button>Войти</button>
                <a href="./registration.php">Регистрация?</a>
            </div>
        </form>
    </div>
    <main id = 'main'>