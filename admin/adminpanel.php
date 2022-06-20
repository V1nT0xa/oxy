<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: security/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: security/login.php");
  }
?>
<?php
header('Content-type: text/html; charset=utf-8');

if (! $_SESSION['admin'])
header('Location: security/base/adminavt.php');
?>
<html style='overflow: hidden;'>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="adminpanel.css">	
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
									<a href='phone.php' class='line'><div>Смартфони та аксесуари</div></a>
									<a href='pc.php' class='line'><div>Комп'ютери та ноутбуки</div></a>
									<a href='pv.php' class='line'><div>Все для PC</div></a>
									<a href='tv.php' class='line'><div>Телевізори та аксесуари</div></a>
									<a href='service.html' class='line'><div>Сервісний центр</div></a>
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
		<a href='#'><div class='logo'>Панель керування</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>
			<a href="..\room\index.php" >Вийти</a>
		</div>
	</div>
		
	</header>
<div class='adminpanel-margin'></div>
<div class='adminpanel-table'>

	<a href='zayavka/zayavka.php'>
	<div class='adminpanel-zamovlennya'>
		<div class='adminpanel-zamovlennya-float'>
			<div class='adminpanel-zamovlennya-name'>
				<h1>Замовлення</h1>
			</div>
			<div class='adminpanel-zamovlennya-text'>
				<h2>Розділ для перегляду,підтвердження та видалення вхідних замовлень від клієнтів OXY<h2>
			</div>
		</div>	
		<div class='adminpanel-zamovlennya-image'>
			<div class='adminpanel-zamovlennya-image-border'></div>
			
		</div>
	</div>
	</a>
	<div class='adminpanel-settings'>
	
		<a href='shop/watchshop.php'>
		<div class='adminpanel-tovar'>
			<div class='adminpanel-vertical-name'>
				<h2>Товари</h2>
			</div>
			<div class='adminpanel-vertical-image adminpanel-user1'></div>
			<div class='adminpanel-vertical-text'>
				<h1>Товари</h1>
				<h2>Розділ для добавлення,редагування або видалення товарів сайту</h2>
			</div>	
		</div>
		</a>
		<a href='users/index.php'>
		<div class='adminpanel-user'>
			<div class='adminpanel-vertical-name'>
				<h2>Користувачі</h2>
			</div>
			<div class='adminpanel-vertical-image adminpanel-user2'></div>
			<div class='adminpanel-vertical-text'>
				<h1>Користувачі</h1>
				<h2>Розділ для перегляду зареєстрованих користувачів на сайті</h2>
			</div>
		</div>
		</a>
		<a href='news/watchnews.php'>
		<div class='adminpanel-news'>
			<div class='adminpanel-vertical-name'>
				<h2>Новини</h2>
			</div>
			<div class='adminpanel-vertical-image adminpanel-user3'></div>
			<div class='adminpanel-vertical-text'>
				<h1>Новини</h1>
				<h2>Розділ для добавлення,редагування або видалення новин сайту</h2>
			</div>
		</div>
		</a>
	</div>
</div>

</body>
</html>