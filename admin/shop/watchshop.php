
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
<?php
header('Content-type: text/html; charset=utf-8');

if (! $_SESSION['admin'])
header('Location: adminavt.php');
?>
<?php include('server/serveraddphone.php') ?>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="..\adminpanel.css">	
	<link rel="stylesheet" type="text/css" href="..\..\style\phone.css">	
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
		<a href='#'><div class='logo'>Товари - Панель керування</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>
			<a href="categoriesadd.php" >Добавити товар</a>
			<a href="..\adminpanel.php" >Повернутись</a>
		</div>
	</div>
		
	</header>


		<div class='block-header'></div>
	


<div class='phone-position'>
		<div class='phone-filter'>
			<label for="pseudoBtn-filter" class="btn" >
			<div class='phone-filter-zagolovok'>Налаштування</div>
			
			


	<div class='container-filter-table' style='width:100%;'>							
		<a href='categoriesadd.php'>
			<div class='phone-filter-change'>Добавити товар</div>
		</a>	
	</div>
	
	
	
	
	
	
	
	





		</div>
	
		<div class='phone-tovary'>
			<div class='phone-tovar-zagolovok'>Список всіх товарів</div>
			
			<div id="catalog">
			
			
			<?php
			include "..\..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `phone` ORDER BY id DESC");
					
					while ($ulist = mysqli_fetch_assoc($resultul))
					{
							

					echo '<div id=item-card class=op'.$ulist['apple'].'>';
					

					
					
						
					echo '<div class=phone-tovar>';	
					echo '<div class=item_box>';
					echo '<div class=catalog-products-wrapper id=catalog>';
					
						echo '<div class=phone-tovar-list>';	
					
							echo '<div class=phone-tovar-img>';
								echo '<img src='.$ulist['img'].'/>';
							echo '</div>';	

							echo '<div class=phone-tovar-info>';
								
								echo '<div class=phone-tovar-name>';
									echo '<div class=item_title>'.$ulist['name'].'<sup>'.$ulist['memory'].'</sup>'.'</div>';
								echo '</div>';
								
								echo '<div class=phone-tovar-categories>';
									if ($ulist['addinfo1'] == 1) {
										echo '<span>'.'флагман'.'</span>';
									};
									if ($ulist['addinfo2'] == 1) {
									echo '<span>'.'вологозахист'.'</span>';
									};
									if ($ulist['addinfo3'] == 1) {
									echo '<span>'.'камерофон'.'</span>';
									};
									if ($ulist['addinfo4'] == 1) {
									echo '<span>'.'фаблет'.'</span>';
									};
									if ($ulist['addinfo5'] == 1) {
									echo '<span>'.'ультратонкий'.'</span>';
									};
									if ($ulist['addinfo6'] == 1) {
									echo '<span>'.'FaceID'.'</span>';
									};
									if ($ulist['addinfo7'] == 1) {
									echo '<span>'.'NFC'.'</span>';
									};
									if ($ulist['addinfo8'] == 1) {
									echo '<span>'.'microSD'.'</span>';
									};
									if ($ulist['addinfo9'] == 1) {
									echo '<span>'.'без microSD '.'</span>';
									};
									if ($ulist['addinfo10'] == 1) {
									echo '<span>'.'бездротова зарядка'.'</span>';
									};
									if ($ulist['addinfo11'] == 1) {
									echo '<span>'.'fast charge'.'</span>';
									};
									if ($ulist['addinfo12'] == 1) {
									echo '<span>'.'стерео'.'</span>';
									};
									if ($ulist['addinfo13'] == 1) {
									echo '<span>'.'немає 3.5 мм'.'</span>';
									};
									if ($ulist['addinfo14'] == 1) {
									echo '<span>'.'Wi-Fi 6'.'</span>';
									};
									
								echo '</div>';
								echo '<div class=phone-tovar-opus>';
									echo '<span>'.'Екран:⠀⠀'.'</span>'; 
									echo '<span>'.$ulist['display'].'</span>';
									echo '<br>';
									echo '<span>'.'Камера:⠀⠀'.'</span>'; 
									echo '<span>'.$ulist['camera'].'</span>';
									echo '<br>';
									echo '<span>'.'Процесор:⠀⠀'.'</span>'; 
									echo '<span>'.$ulist['proc'].'</span>';
									echo '<br>';
									echo '<span>'.'Батарея:⠀⠀'.'</span>'; 
									echo '<span>'.$ulist['battery'].'</span>';
									echo '<br>';
									echo '<span>'.'Вага:⠀⠀'.'</span>'; 
									echo '<span>'.$ulist['weight'].'</span>';
								echo '</div>';
								
							echo '</div>';	
							
							echo '<div class=phone-tovar-price>';
								if ($ulist['sale']==1){
									echo '<span class=phone-tovar-lineprice>'.$ulist['price'].'</span>';
									echo '<span class=phone-tovar-lineprice>'.'грн.'.'</span>';
									echo '<span class=phone-tovar-saleprice>';
										echo '<span class=item_price>'.$ulist['saleprice'].'</span>';
									echo '</span>';
									echo '<span class=phone-tovar-saleprice>'.'грн.'.'</span>';
								};
								if ($ulist['sale']==0){
									echo '<span class=phone-tovar-biglineprice>';
										echo '<span class=item_price>'.$ulist['price'].'</span>';
									echo '</span>';
									echo '<span class=phone-tovar-biglineprice>'.'грн.'.'</span>';
									
								};
							echo '<br>';
							echo '<br>';							
								
							echo '</div>';	
							
						
					
							
							
						
						echo '</div>';	
						echo '</div>';	
					echo '</div>';		
					echo '</div>';		
					
						echo '</div>';	
					
					
					
					}
				?>
				
			
				
			
		</div>
			
			
			
			
		
			
		</div>
		
	</div>

 <div id="cart_content"></div>


      	
		
	
	
	
</body>
</html>