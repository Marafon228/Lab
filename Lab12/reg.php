<!DOCTYPE html>
<html lang="ru">
<STYLE>
    body{
        background-color:black;
        color: white;
        font-family: Candara;
        font-size: 18px;
    }

    .forma{
        margin-left: auto;
        margin-right: auto;
        width: 6em
    }
    .btn{
        font-size: 100px;
        padding: 5px 25px 5px 25px;
        border-radius: 9px;
        background:white;
        color: black;

    }
    .btn:hover{
        border-radius: 9px;
        background:black;
        color: white;
    }
    input{
        padding: 5px 15px 5px 15px;
        border-radius: 9px;
        background:white;
        color: black;
    }

</STYLE>
<head>
    <meta charset="utf-8" />
    <title>Регистрация</title>
</head>
<body>
<div class="forma">
    <h2>Регистрация</h2>
<form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
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
        <input type="submit" name="submit" value="Зарегистрироваться" class="btn">
        <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
    </p>
</form>
</div>
</body>
</html>
