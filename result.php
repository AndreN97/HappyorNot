<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Resultat</title>
</head>
<body>
<h1>Resultat</h1>

<?php
mysqli_connect('localhost','root','123','mydatabase');

$ansOne = $_POST['qOne'];
$ansTwo = $_POST['qTwo'];
$ansThree = $_POST['qThree'];
$ansFour = $_POST['qFour'];
$ansFive = $_POST['qFive'];

header('Location: questions2.html')
?>

</body>
</html>