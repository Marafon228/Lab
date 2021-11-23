<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<style>

    body{
        color: deeppink ;
        background: #6B8E23;
    }
    h1{
        text-decoration:sienna ;
        text-align: center;
    }
    div{
       align-content: center;
    }
    .forma{
        margin-left: 90%;
        border: 2px solid red;
        padding: 5px 15px 5px 15px;
    }
    a:link{
        color: #650438;
    }
    input{
        size: 15px;
        border-radius: 10px;
        background: black;
        padding: 15px 15px 15px 15px;
        color: aquamarine;
    }

    .name{
        border-radius: 25px;
        background: black;
        padding: 15px 15px 15px 15px;
        color: aquamarine;
    }
    input:hover{
        border-radius: 10px;
        background: white;
        padding: 15px 15px 15px 15px;
        color: red;
    }
</style>
<head>
    <meta charset="utf-8" />
    <title class="h1">Главная страница</title>
</head>
<body>

<h1>Главная страница</h1>
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <div class="forma">
    <form action="testreg.php" method="post">
        <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
        <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>
        <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
        <p>
            <input type="submit" name="submit" value="Войти" class="name">
            <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
            <br>
            <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
            <a href="reg.php">Зарегистрироваться</a>
        </p>

    </form>
    <p> Вы вошли на сайт как гость </p>
        <a href="reg.php"> Эта ссылка доступна только зарегистрированным пользоавтелям</a>
    <br />
    </div>
    <?php
} else {
    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br /><a  href='logout.php' target='_blank'>Выйти</a>";
}
?>
</body>
</html>
