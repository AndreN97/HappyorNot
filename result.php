<?php
mysqli_connect('localhost','root','123','mydatabase');

$ansOne = $_POST['qOne'];
$ansTwo = $_POST['qTwo'];
$ansThree = $_POST['qThree'];
$ansFour = $_POST['qFour'];
$ansFive = $_POST['qFive'];
switch($_POST['happyornot']){
    case "qOne":
        header('Location: questions2.html');
        break;
    case "qTwo":
        header('Location: questions3.html');
        break;
    case "qThree":
        header('Location: Questions4.html');
        break;
    case "qFour":
        header('Location: questions5.html');
        break;
    default:
        header('Location: questions.php');
        break;
}
?>