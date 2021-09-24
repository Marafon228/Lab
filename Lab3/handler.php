<?php
$strHeading = "Привет, " . $_POST["username"];

switch ($_POST["favoritecolor"]) {
    case "r":
        $strBackgroundColor = "rgb(255,0,0)";
        break;
    case "g":
        $strBackgroundColor = "rgb(0,255,0)";
        break;
    case "b":
        $strBackgroundColor = "rgb(0,0,255)";
        break;
    default:
        $strBackgroundColor = "rgb(255,255,255) ";
        break;
}
?>
<html>
<head>
    <title>Форма</title>
</head>
<body style="background: <?php echo $strBackgroundColor; ?>;">
<?php
if (empty($_POST["username"])) {
    echo $strHeading. "незнакомец";
}
else{
    echo $strHeading;
}
?>
</body>
</html>