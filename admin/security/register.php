<?php include('base/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style/register.css">
</head>
<body>
  <div class="header">
  	<h2>Реєстрація</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('base/errors.php'); ?>
  	<div class="input-group">
  	  <label>Логін</label>
  	  <input type="text" maxlength="13" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пошта</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторіть пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Завершити</button>
  	</div>
  	<p>
  		Є аккаунт? <a href="login.php">Ввійти</a>
  	</p>
	<p>
		<a href="..\..\index.php">Повернутись на головну</a>
  	</p>
  </form>
</body>
</html>