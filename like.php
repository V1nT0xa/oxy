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
	<title>Вибране <?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="menu.css">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<script>
			window.onload = function () {
			document.body.classList.add('loaded_hiding');
			window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
			}, 500);
			}
		</script>
		
</head>
<body>

<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item">OXY</div>
	</div>
</div>



<header>
	<div class='header-family'>	
		<div class='header-left'>
			
		</div>
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
			<a href='#'><?php echo $_SESSION['username']; ?></a>		
			<a href='like.php'>Вибране</a>
			<a href='store.php'>Кошик</a>	
			<a href="room.php?logout='1'" >Вийти</a>
		</div>
	</div>
		<div class='header-menu'>
			<div class='header-input'></div>
			<div class='header-text' >
				<a href='news.php' class='line'><span>Новини</span></a>
				<a href='news.php' class='line'><span>Товари зі знижками</span></a>
				<a href='index.html' class='line'><span>Магазин</span></a>
				<a href='promo.html' class='line'><span>Реферальна система</span></a>
				<a href='service.html' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
	</header>

	<br><br><br><br><br><br><br><br>	
123

		
		
</body>
</html>