<?php
session_start();

echo "do it!";

  $temp_array = array(); // create empty array

  $temp_array = json_decode(file_get_contents('js/myendorsements.json'));

  $name = $_POST['currentName'];
  echo $name;
  $endorsement = $_POST['currentEndorsement'];
  echo $endorsement;
  $timestamp = time();
  echo $timestamp;


  $updateinfo = array(
    'name'=> $name,
    'endorsement'=> $endorsement,
    'timestamp' => $timestamp
    );

  array_push($temp_array, $updateinfo);
  file_put_contents('js/myendorsements.json', json_encode($temp_array));

  header("Location: endorse.php");

?>