<?php
session_start();

$name = $_SESSION["Name"];
$date = getdate();
$date2 = $date["mon"] . "/" . $date["mday"] . "/" . $date["year"];
$endorse = $_POST["StoreEndorsement"];

$file = file_get_contents('myjson.json');
$data = json_decode($file);
unset($file);

$data[] = array('Full_Name'=>$name, 'date'=>$date2, 'words'=>$endorse);

file_put_contents('myjson.json', json_encode($data));
unset($data);

header("location:endorsements.html");

?>