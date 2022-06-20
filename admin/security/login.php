<?php include('base/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Авторизація</title>
   <link rel="stylesheet" type="text/css" href="style/register.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
  	<h2>Авторизація</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('base/errors.php'); ?>
  	<div class="input-group">
  		<label>Логін</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Ввійти</button>
  	</div>
  	<p>
  		Не маєте аккаунта? <a href="register.php">Створити</a>
  	</p>
	<p>
		<a href="..\..\index.php">Повернутись на головну</a>
  	</p>
  </form>
</body>
</html>