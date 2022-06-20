<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ..\admin\security\login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ..\admin\security\login.php");
  }
?>

<?php include('..\admin\news\serveraddnews.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="..\style\room.css">	
	<link rel="stylesheet" type="text/css" href="adminpanel.css">	
	<link rel="stylesheet" type="text/css" href="..\style\news.css">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
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
								
									<a href='..\index.php' class='line'><div>Магазин</div></a>
									<a href='index.php' class='line'><div>Профіль</div></a>
									<a href='news.php' class='line'><div>Новини</div></a>
									<a href='saleshop.php' class='line'><div>Товари зі знижками</div></a>
									<a href='promo.php' class='line'><div>Реферальна система</div></a>
									<a href='..\service.php' class='line'><div>Сервісний центр</div></a>
							
									
								
									
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
		<a href='..\index.php'><div class='logo'>OXY</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>
			<a href='..\admin\security\loginadminpanel.php'><?php echo $_SESSION['username']; ?></a>			
			<a href='like.php'>Вибране</a>
			<a href='store.php'>Кошик</a>	
			<a href="index.php?logout='1'" >Вийти</a>
		</div>
	</div>
		<div class='header-menu'>
		
			<div class='header-text' >
				<a href='..\index.php' class='line'><span>Магазин</span></a>
				<a href='index.php' class='line'><span>Профіль</span></a>
				<a href='news.php' class='line'><span>Новини</span></a>
				<a href='saleshop.php' class='line'><span>Товари зі знижками</span></a>
			
				<a href='promo.html' class='line'><span>Реферальна система</span></a>
				<a href='service.html' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
	</header>
<div class='header-margin'></div>		
		

		<div class='block-user-table'>
			
		<br>
			
				<h1><?php
					include "..\userslist.php";
					
					$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY id DESC");
					
					while ($ulist = mysqli_fetch_assoc($resultul))
					{
						
						
					echo '<div class=watch-news>';	
							echo '<div class=news-old id='.$ulist['id'].'>';
								echo $ulist['tema'];
							echo '</div>';
					
							echo '<div class=news-img img id='.$ulist['id'].'>';
								echo '<img src='.$ulist['img'].'/>';
							echo '</div>';	
					
							echo '<div class=news-zagolovok>';
								echo $ulist['zagolovok'];
							echo '</div>';		
						
							echo '<div class=news-text>';
								echo $ulist['text'];
							echo '</div>';		
						
					echo '</div>';	
					}
				?>
				</h1>
		
	
			
			
		</div>
	
		
</body>
</html>