<div class="register">
    <form action="../adduser.php" method = "post" id = "form">
        <div>
            <label for="name">Имя:</label>
            <input type="text" name = "name" required placeholder = "Иван">
        </div>

        <div>
            <label for="login">Логин:</label>
            <input type="text" name = "login" required >

        </div>
        <div>        
            <label for="pass">Пароль</label>
            <input type="password" name = "password" required >
        </div>

        <div>
            <label for="email">Еmail:</label>
            <input type="text" name = "email" required placeholder = "Еmail@mail.ru">
        </div>

        <div>
            <label for="requisites">Номер карты:</label>
            <input type="text" name = "requisites" required placeholder = "0001000200030004">
        </div>
        <button id = "button">Зарегистрироваться</button>
        <label for="flag" style = 'color:red;font-size:18px;width:100%;border:none;display:flex;justify-content:center;'>
        </label>
        <label for="flag" style = 'color:red;font-size:18px;width:100%;border:none;display:flex;justify-content:center;' id="error">
        <?php
            echo $_SESSION['flag'];
        ?>
        </label>
    </form>
</div>
<script src = './js/register.js'></script>