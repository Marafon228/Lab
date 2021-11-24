<?php
session_start();
if(!empty($_SESSION['city']) && !empty($_SESSION['age']))
{
    $city = $_SESSION['city'];
    $age = $_SESSION['age'];
}
else
{
    $email ='';
    $city = '';
}
?>

<form action="" method="GET">
    Имя: <input type="text" name="name" value="<?php echo $age ?>"><br>
    Возраст: <input type="text" name="surname"><br>
    Город: <input type="text" name="password" value="<?php echo $city ?>"><br>

    <input type="submit"><br>
</form>

<a href="/logout.php">Logout</a>
