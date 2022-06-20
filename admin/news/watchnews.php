
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
	<link rel="stylesheet" type="text/css" href="..\..\style\news.css">	
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
		<a href='index.html'><div class='logo'>Новини - Панель керування</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>
			<a href="addnews.php" >Додати новину</a>
			<a href="..\adminpanel.php" >Повернутись</a>
		</div>
	</div>
		
	</header>
<br><br>

		<div class='block-header'></div>
		<div class='block-user-table'>
			
		<br>
			
				<h1><?php
					include "..\..\userslist.php";
					
					$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY id DESC");
					
					while ($ulist = mysqli_fetch_assoc($resultul))
					{
					echo '<div class=watch-news>';	
							echo '<div class=news-old>';
								echo $ulist['id'];
							echo '</div>';
						
							echo '<div class=news-img img>';
								echo '<img src='.$ulist['img'].'/>';
							echo '</div>';	
						
							echo '<div class=news-tema>';
								echo $ulist['tema'];
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