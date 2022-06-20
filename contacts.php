<html>
<head>
<title>OXY - Твій друг електроніки</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/style-body.css">
	<link rel="stylesheet" type="text/css" href="style/contact.css">	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src="js/header.js"></script>
	<script src="script/search.js"></script>
	<script src="js/animbutton.js"></script>
	<script src="js/popular.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
		<a href='store.php'><div class='header-right-logo store'></div></a>
	
		<div class='header-right'>
			<a href='room/index.php'>Ввійти</a>		
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


<div class='contact' align='center'>	  
	
	<div class='family-contact'>
		<img src='style/image/metka1.png'>
		<h1>НАШ МАГАЗИН</h1>
		<h2>вулиця Романа Шухевича, 59, Коломия, Івано-Франківська область, 78200</h2>
	</div>
	<div class='family-contact'>
		<img src='style/image/phone1.png'>
		<h1>НОМЕР ТЕЛЕФОНУ</h1>
		<h2><a href='tel:+380632870030'>+38(063) 287-00-30</a><br><br><a href='tel:+380951255924'>+38(095) 125-50-24</a><br></h2>
	</div>
	<div class='family-contact'>
		<img src='style/image/instagram1.png'>
		<h1>ІНСТАГРАМ</h1>
		<h2><a href='https://www.instagram.com/oxy_kolomyya/'>@oxy_kolomyya</a><br><br><br></h2>
	</div>
	<div class='family-contact'>
		<img src='style/image/mail1.png'>
		<h1>ЕЛ.АДРЕС</h1>
		<h2><a href='mailto:OXY.zakup@gmail.com'>OXY.zakup@gmail.com</a><br><br><br></h2>
	</div>
</div>


	<div class='maps' >
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d571.747493506195!2d25.04263119206938!3d48.52786451915154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4736d28502500001%3A0x91a5541a1c58d0cc!2z0KHQvtC70L7QvNC-0L0!5e0!3m2!1suk!2sua!4v1641770399472!5m2!1suk!2sua" class='child-maps' allowfullscreen="" loading="lazy"></iframe>

	</div>

