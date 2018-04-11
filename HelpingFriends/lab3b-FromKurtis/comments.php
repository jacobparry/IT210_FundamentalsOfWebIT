<?php
session_start();
include("settings.php");
$userId = $_SESSION["UserId"];

$comments = $_POST["comments"];

$query = "INSERT INTO `IT210`.`Comments` (`UserId`, `Comment`) VALUES ('".$userId."', '$comments')";
$result = mysqli_query($con, $query);

header("location:projects.php");

?>

