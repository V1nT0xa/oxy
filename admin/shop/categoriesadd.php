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
header('Location: ..\securiy\base\adminavt.php');
?>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="..\adminpanel.css">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	
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
									<br><br>
									<a href='forus.html' class='line'><div>Про нас</div></a>
									<a href='contact.html' class='line'><div>Контакти</div></a>
									<a href='goandpay.html' class='line'><div>Доставка та оплата</div></a>
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
		<a href='index.html'><div class='logo'>OXY</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>
			<a href="..\adminpanel.php" >Вийти</a>
		</div>
	</div>
		
	</header>
<div class='header-margin'></div>	

<div class='block-function'>		
		<a href='addphone.php'><div class='block-function-categories'>Смартфони</div></a>
		<a href='addpc.php'><div class='block-function-categories'>Комп'ютери та ноутбуки</div></a>
		<a href='addpv.php'><div class='block-function-categories'>Все для PC</div></a>
		<a href='addtv.php'><div class='block-function-categories'>Телевізори та аксесуари</div></a>
</div>	
	
</body>
</html>