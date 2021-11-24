<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title class="h1">Главная страница</title>
</head>
<body>
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (empty($_SESSION['count'])) {
    ?>
        <form action="test.php" method="post">
            <!--****  test.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
            <p>
                <label>Введите вашу страну:<br></label>
                <input name="count" type="text" size="15" maxlength="15">
            </p>
            <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->


            <p>
                <input type="submit" name="submit" value="Отправить" class="name">
                <!--**** Кнопочка (type="submit") отправляет данные на страничку test.php ***** -->
                <a href="test.php"><input type="submit" name="btn" value="test"> </a>
                <br>

            </p>

        </form>
        <br />
    <?php
} else {
    // Если не пусты, то мы выводим ссылку
    echo "Вы выбрали страну ".$_SESSION['count']."<br /><a  href='logout.php' target='_blank'>Выйти</a>";
}
?>
</body>
</html>

