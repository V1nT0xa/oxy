<html>
<head>
<title>OXY - Твій друг електроніки</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/style-body.css">
	<link rel="stylesheet" type="text/css" href="style/contact.css">	
	<link rel="stylesheet" type="text/css" href="style/buspay.css">	
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
				<a href='phone.php' class='line'><span>Смартфони та аксесуари</span></a>
				<a href='pc.php' class='line'><span>Комп'ютери та ноутбуки</span></a>
				<a href='pv.php' class='line'><span>Все для PC</span></a>
				<a href='tv.php' class='line'><span>Телевізори та аксесуари</span></a>
				<a href='service.html' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
	</header>
<div class='header-margin'></div>	

<div class='buspay-text'>
<h1>Оплата доставки</h1>
	<h2>
		<p>Відправлення та оплата: - Нова пошта Оплата. (Оплачуєте при отриманні на відділенні вартість замовлення + вартість посилки + 2% від вартості замовлення + 20 грн. зворотне повернення післяплати).</p>
		<p>- Нова пошта з передоплати на банківську картку (заощаджуйте від 30 грн і вище)</p>
<br><br>
		<p>Вибравши інтернет-магазин OXY Ви отримуєте всі переваги покупок on-line:</p>
		<p>зручність покупки, та професійну консультацію</p>
		<p>швидку доставку, при оплаті до 15:00, посилка їде день у день. Максимальний термін доставки 1-3 дні</p>
		<p>великий асортимент товарів, все в наявності.</p>	
	</h2>
<h1>Де можна отримати замовлення?</h1>
	<h2>
		<p>Вибирайте найбільш зручний спосіб швидкої доставки:</p>
		<p>самовивіз зі магазину OXY (м.Коломия, вулиця Романа Шухевича, 59(Соломон,другий поверх)</p>
		<p>На відділенні Нової Пошти;</p>
		<p>адресна доставка кур'єром Нової Пошти.</p>
	</h2>
<h1>Як отримати замовлення?</h1>
	<h2>
		<p>Товар можна отримати в пункті самовивозу XY, який Ви обрали під час створення замовлення.</p>
		<p>При отриманні товару у відділенні Нової Пошти необхідно мати при собі документ, що засвідчує особу та повідомити працівника номер накладної.</p>
		<p>Переконливе прохання перевіряти комплектацію та цілісність товару під час його отримання у відділенні перевізника.</p>
	</h2>
<h1>Термін доставки.</h1>
	<h2>
		<p>Вибрали для отримання самовивіз зі магазину OXY:</p>
		<p>якщо товар є на складі - заберіть покупку в день замовлення;</p>
		<p>Вибрали відділення Нової Пошти:</p>
		<p>доставимо за 1-3 робочі дні;</p>
		<p>Ви вибрали адресну доставку кур'єром:</p>
		<p>доставимо за 1-3 робочі дні;</p>
	</h2>
<h1>Вартість доставки.</h1>
	<h2>
		<p>Самовивіз зі складу - Безкоштовно.</p>
		<p>У відділення Нової Пошти або кур'єром – за тарифами перевізника. Нагадуємо, що при покупці післяплатою, ціна доставки буде дорожче. Для вигідної покупки, ви можете заощадити, внеся 100% передоплату на нашому сайті. Пам'ятайте, що ми для вас, якщо товар не підійде, з радістю замінимо його.</p>
	</h2>
<h1>Способи оплати</h1>
	<h2>
		<p>Як сплатити товар в інтернет-магазині OXY?</p>
		<p>Виберіть найбільш зручний для Вас спосіб:</p>
		<p>при отриманні товару зі магазину OXY</p>
		<p>післяплатою у відділенні Нової Пошти</p>
		<p>Оплата провадиться тільки в національній валюті.</p>	
	</h2>
<h1>Залишились питання?</h1>
	<h2>
		<p>Телефонуйте: 093 568 83 91</p>
		<p>Працюємо:</p>
		<p>Пн-Сб: 9:00 - 18:00</p>
	</h2>
</div>

































</body>
</html>