<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Resultat</h1>
<?php
$ansOne = $_POST['qOne'];
$ansTwo = $_POST['qTwo'];
$ansThree = $_POST['qThree'];
$ansFour = $_POST['qFour'];
$ansFive = $_POST['qFive'];

echo "$ansOne $ansTwo $ansThree $ansFour $ansFive"

?>
</body>
</html>