<?php
header('Content-type: text/html; charset=utf-8');

$pas = $_POST['password'];
if ($pas == 925660891)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = '..\..\adminpanel.php';
  }
else
$script = '..\..\..\index.php';
header("Location: $script");

?>