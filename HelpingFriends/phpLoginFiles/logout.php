<?php
session_start();
require('settings.php');
if(session_destroy())
{
  mysql_query("UPDATE $table SET Logged_in = '0';");
  header("Location: contact.php");
}
?>
