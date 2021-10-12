<?php
define("PAGE_TITLE","Регистрация2");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?= PAGE_TITLE ?></title>
</head>
<body>
<?php
$username=$_GET['name'];
$email=$_GET['email'];
echo "<p>Здравствуй ". $username." мы берёмна рассмотрение вашу заявку. Ответ пришлём на ваш Email:" . $email. " </p>";
if ($_GET['vozr'] < 18){
    echo "Вы слишко молоды!";
}
elseif ($_GET['vozr'] >40){
    echo "Извините, но вы нам не подходите";
}

?>
</body>
</html>
