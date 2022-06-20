
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ..\security\login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ..\security\login.php");
  }
?>
<?php
header('Content-type: text/html; charset=utf-8');

if (! $_SESSION['admin'])
header('Location: ..\security\base\adminavt.php');
?>
<?php include('serveraddnews.php') ?>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="adminpanel.css">	
	<link rel="stylesheet" type="text/css" href="addnews.css">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
</head>
<body>
<div class='menu-mobile-none'>
<input type="checkbox" id="pseudoBtn">
	<div class="menubuttonanim">
	<ul class="button button-1">
		<div id="container">
			<ul id="menu">
				<div class='menu-all-header'></div>	
					<input type="text" size="40" placeholder="Пошук на сайті" class='menu-input-input'>
					<div class='menu-all-div'>				
						<div class='menu-all-div-child'>
								<div class='menu-all-div-1'>
									<div><a href='pc.html' class='color-text-white'>Смартфони та аксесуари</a></div>
									<div><a href='notepad.html' class='color-text-white'>Комп'ютери та ноутбуки</a></div>
									<div><a href='pv.html' class='color-text-white'>Все для PC</a></div>
									<div><a href='tv.html' class='color-text-white'>Телевізори та аксесуари</a></div>
									<div><a href='service.html' class='color-text-white'>Сервісний центр</a></div>
								</div>	
						</div>		
					</div>		
			</ul>
		</div>
	</ul>
	</div>
</div>
<header>
	<div class='header-family'>	
		
		<label for="pseudoBtn" class="btn" >
			<div class='menu-container'>
				<div class="container">
					<div class="stick stick-1"></div>
					<div class="stick stick-2"></div>
				</div>
			</div>	
		</label>		
		<a href='#'><div class='logo'>Створення новин</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>

			<a href="..\adminpanel.php" >Повернутись</a>
		</div>
	</div>
		
	</header>
<div class='addnews'></div>	
  <form method="post" action="addnews.php">
	<div class="input-group">
  	  <label>Фото</label>
  	  <input type="img" name="img" >
  	</div>	
  	<div class="input-group">
  	  <label>Тема</label>
  	  <input type="tema" name="tema" >
  	</div>
  	<div class="input-group">
  	  <label>Короткий заголовок</label>
  	  <input type="zagolovok" name="zagolovok" >
  	</div>
  	<div class="input-group addtext">
  	  <label>Текст</label>
  	<textarea type="text" name="text" id="description" rows="5" cols="50"></textarea>
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="addbtn" name="add_news">Опублікувати</button>
  	</div>
	
  </form>	

</body>
</html>