<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
  <title>Адмін Панель</title>
   <link rel="stylesheet" type="text/css" href="style/register.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
  	<h2>Адмін Панель</h2>
  </div>
	 
 <form action="base/adminavt.php" method="post">
  	<div class="input-group">
  		<label>Пароль</label>
  		 <input type="password" name="password" >
  	</div>
  	<div class="input-group">
  		<input type="submit" value="Войти">
  	</div>
	<p>
		<a href="..\..\index.php">Повернутись на головну</a>
  	</p>
  </form>
</body>
</html>