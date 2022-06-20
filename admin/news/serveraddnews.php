<?php

$an = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['add_news'])) {
 
  $img = mysqli_real_escape_string($an, $_POST['img']);
  $tema = mysqli_real_escape_string($an, $_POST['tema']);
  $zagolovok = mysqli_real_escape_string($an, $_POST['zagolovok']);
  $text = mysqli_real_escape_string($an, $_POST['text']);

  if (empty($tema)) { array_push($errors, "Введіть тему"); }
  if (empty($zagolovok)) { array_push($errors, "Введіть заголовок"); }
  if (empty($text)) { array_push($errors, "Введіть текст"); }
  
  $user_check_query = "SELECT * FROM news WHERE img='$img' tema='$tema' OR zagolovok='$zagolovok' LIMIT 1";
  $result = mysqli_query($an, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 
  if (count($errors) == 0) {

  	$aquery = "INSERT INTO news (img, tema, zagolovok, text) 
  			  VALUES('$img', '$tema', '$zagolovok', '$text')";
  	mysqli_query($an, $aquery);
  	$_SESSION['tema'] = $tema;

  	header('location: adminpanel.php');
  }
}
  
  
  
  
?>