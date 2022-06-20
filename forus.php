<html>
<head>
<title>Сервісний центр - OXY</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/forus.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script/search.js"></script>
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
					
					<div class='menu-all-div'>				
						<div class='menu-all-div-child'>
								<div class='menu-all-div-1'>
									 <a href="shop/phone.php"><div>Смартфони та аксесуари</div></a>
									 <a href="shop/pc.php"><div>Комп'ютери та ноутбуки</div></a>
									 <a href="shop/pv.php"><div>Все для PC</div></a>
									 <a href="shop/tv.php"><div>Телевізори</div></a>
									 <a href="service.php"><div>Сервісний центр</div></a>
									 <br> <br>
									 <a href='index.php'><div>Головна</div></a>
									 <a href='forus.php'><div>Про нас</div></a>
									 <a href='buspay.php'><div>Доставка та оплата</div></a>
									 <a href='shop.php'><div>Магазин</div></a>
									 <a href='contacts.php'><div>Контакти</div></a>
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
		<div class='header-left'>
			<a href='tell:+380679501842 '>067 950 18 42 </a>
		</div>
		<label for="pseudoBtn" class="btn" >
			<div class='menu-container'>
				<div class="container">
					<div class="stick stick-1"></div>
					<div class="stick stick-2"></div>
				</div>
			</div>	
		</label>		
		<a href='index.php'><div class='logo'>OXY</div></a>
		<div class='header-right-logo store'></div>
				<div class='header-right'>
			<a href='room/index.php'>
				<?php 
					session_start(); 
					if (!isset($_SESSION['username'])) 
					{
						echo "Ввійти";
					} else {
						echo $_SESSION['username'];
						}
				?>
			</a>		
			<a href='like.php'>Вибране</a>
			<a href='store.php'>Кошик</a>	
		</div>
	</div>
		<div class='header-menu'>
			<input type="text" id="mySearch" onkeyup="myFunction()" size="40" placeholder="Пошук на сайті"  maxlength='20'>
			<div class='header-input'>
				<div class='header-input-search'>
					<ul id="myMenu">
					  <li><a href="shop/phone.php">Смартфони та аксесуари</a></li>
					  <li><a href="shop/pc.php">Комп'ютери та ноутбуки</a></li>
					  <li><a href="shop/pv.php">Все для PC</a></li>
					  <li><a href="shop/tv.php">Телевізори</a></li>
					  <li><a href="service.php">Сервісний центр</a></li>
					  
					  <li><a href='forus.php'>Про нас</a></li>
					  <li><a href='buspay.php'>Доставка та оплата</a></li>
					  <li><a href='shop.php'>Магазин</a></li>
					  <li><a href='contacts.php'>Контакти</a></li>
					  
					  <li><a href='shop/phone.php'>Apple<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Google<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Nokia<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Oppo<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Realme<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Xiaomi<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Poco<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='shop/phone.php'>Samsung<sup>Смартфони та аксесуари</sup></a></li>
					  
					  <li><a href='shop/pc.php'>Apple<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>MSI<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>Lenovo<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>HP<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>Dell<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>Acer<sup>Ноутбуки </sup></a></li>
					  <li><a href='shop/pc.php'>Asus<sup>Ноутбуки </sup></a></li>
					  
					  <li><a href='contacts.php'> <sup> </sup></a></li>
					  
					 
			
			
			
					</ul>
				</div>
			</div>
			<div class='header-text' >
				<a href='shop/phone.php' class='line'><span>Смартфони та аксесуари</span></a>
				<a href='shop/pc.php' class='line'><span>Комп'ютери та ноутбуки</span></a>
				<a href='shop/pv.php' class='line'><span>Все для PC</span></a>
				<a href='shop/tv.php' class='line'><span>Телевізори та аксесуари</span></a>
				<a href='service.php' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
</header>
<div class='header-margin'></div>	

<div class='golovne'>
	<div class='golovne-photo'></div>
</div>
<h3 class="slider_text wow animated fadeInDown" data-wow-delay="0.3s">Про нас</h3>

<div class='golovne-text'>
	<div style='float:left'>Кожен спеціаліст робить свій особистий внесок у розвиток компанії, постійно підвищуючи якість послуг Коломийського комп'ютерного сервісу, освоюючи нові технології та розширюючи список послуг.</div>
	<div style='float:right'>Наші фахівці готові негайно надати професійну комп'ютерну допомогу, якісне обслуговування, безкоштовні консультації з проведених робіт.</div>
</div>

<div class='master'>
	<h1>Майстри сервісу</h1>
	<div class='master-service-photo'>
		<div class='master-one'></div>
		<div class='master-two'></div>
		<div class='master-three'></div>
	</div>
	<img src='style/image/personal.png' class='master-two2'>
	<div class='master-service'>
		<div class='master-text'>
			
			<h1>Влад</h1>
			<h2>Досвід - 2 роки</h2>
			<hr color='#f2af00'>
			<h3>Ремонт пошкодженної техніки</h3>
		</div>	
	<img src='style/image/personal1.png' class='master-two2'>
		<div class='master-text '>
			
			<h1>Тарас </h1>
			<h2>Досвід - 5 років</h2>
			<hr color='#f2af00'>
			<h3>Налаштування програмного забезпечення,налаштування програмного забезпечення,діагностика ноутбука чи ПК</h3>
		</div>
	<img src='style/image/printer1.png' class='master-two2'>
		<div class='master-text'>
			
			<h1>Віктор</h1>
			<h2>Досвід - 4 роки</h2>
			<hr color='#f2af00'>
			<h3>Ремонт та сервісне обслуговування принтерів</h3>
		</div>
	</div>
</div>

<div class='golovne-text-footer'>
	<div>Ми приділяємо пріоритетну увагу сервісу та обслуговування клієнтів і прагнемо зробити комп'ютерну допомогу доступною для всіх власників ПК.</div>
	<div class='golovne-text-photo'></div>
</div>



















	
<footer>
	<div class='logo-footer'>
		<div class='logo-footer-oxy'>OXY</div>
		<div class='logo-footer-menu'>
			<a href='index.php'>Головна</a>
			<a href='forus.php'>Про нас</a>
			<a href='buspay.php'>Доставка та оплата</a>
			<a href='shop.php'>Магазин</a>
			<a href='contacts.php'>Контакти</a>
		</div>
	</div>
<hr style='width:100%;border:0;'>
	<div class='footer-info'>
		<div class='info-table'>
			Комп’ютерний центр «OXY» — місце, де здійснюється продаж та обслуговування різних видів техніки кваліфікованими спеціалістами.
			<p>Розвиток технологій та їхнє активне запровадження у сферах людської діяльності передбачає потребу у надійній та якісній техніці для ефективної роботи у даному середовищі.</p></div>
		</div>
		<div class='footer-right-table'>
			<div class='footer-input'>
				<div class='footer-input-text'>Підпишіться,щоб бути першим!</div>
					<form>
						<input type="email" class='footer-input-forma' id="email" pattern=".+@globex\.com" size="40" required placeholder='Введіть свій E-mail'>
						<input type="submit" class='footer-input-button' value="1" >
					</form>
			</div>
		</div>
		<div class='seccurity-footer'>
			<div class='footer-rules'>© 2021 OXY. Всі права збережені</div>
			<div class='footer-social'>	
				<a href='https://www.instagram.com/oxy_kolomyya/'><div class='footer-instagram'></div></a>
			</div>	
		</div>
</footer>	
</body>
</html>