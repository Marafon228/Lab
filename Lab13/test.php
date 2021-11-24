<?php
session_start();
if(!empty($_SESSION['country']))
{
    echo "Вы ввели страну: " . $_SESSION['country'] . '<br>';
    $time = mktime()-$_SESSION['curtime'];
    echo "Вы зашли на сайт " . $time . ' секунд назад' . '<br>';
    $update=$_SESSION['counter']++;
    if ($update==0)
    {
        echo "Вы еще не обновляли страницу" . '<br>';
    }
    else
    {
        echo "Вы обновили эту страницу ".$update." раз. ";
    }
    if(!empty($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    else
    {
        $email ='';
    }
}
?>

<form action="" method="GET">
    Имя: <input type="text" name="name"><br>
    Фамилия: <input type="text" name="surname"><br>
    Пароль: <input type="text" name="password"><br>
    Email: <input type="text" name="email" value="<?php echo $email ?>"><br>

    <input type="submit">
</form>
