<html>
<head>
<title>OXY - Твій друг електроніки</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/style-body.css">	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src="script/header.js"></script>
	<script src="script/search.js"></script>
	<script src="script/animbutton.js"></script>
	<script src="script/popular.js"></script>
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
		<a href='#'><div class='logo'>OXY</div></a>
	
		<a href='store.php'><div class='header-right-logo store'></div></a>
	
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
<div class='header-img-top'>
  <img src='style/image/asus3.jpg' class='gimg' id="image_1"/>
  <img src='style/image/asus.jpg' class='gimg' id="image_2" style="opacity: 0; filter: alpha(opacity=0); " />
  <img src='style/image/asus2.jpg' class='gimg' id="image_3" style="opacity: 0; filter: alpha(opacity=0); " />
  <h3 class="slider_text wow animated fadeInDown" data-wow-delay="0.3s">OXY - сучайсний світ<span>!</span></h3>	
</div>	

<div class='spiv-praciya'>
	<h1>Найкращі компанії на сайті OXY</h1>
	<h2>Сьогодні ми представляємо 6 світових виробників девайсів – ACER,<br> ASUS, Dell, HP, Lenovo,Xiaomi та інші</h2>
</div>

<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide acer"></div>
        <div class="swiper-slide asus"></div>
        <div class="swiper-slide dell"></div>
        <div class="swiper-slide hp"></div>
        <div class="swiper-slide lenovo"></div>
        <div class="swiper-slide xiaomi"></div>
      </div>
</div>

<div class='popular-categories-mobile'>
	<h1>Популярні категорії</h1>
	<div>
		<a href='shop/pc.php'><span class='popular-categories-notepad'>Ноутбуки</span></a>
		<a href='service.php'><span class='popular-categories-printer'>Заправка катриджів</span></a>
		<a href='shop/pv.php'><span class='popular-categories-bp2'>Блоки живлення</span></a>
	</div>
</div> 

<div class='popular-categories'>
	<h1>Популярні категорії</h1>
		<ul class='kontfaq' >
			<li><a class="faqmenu faqactiv" href="faqcont_1">
				Ноутбуки
			</a></li>		
			<li style='margin-left:15px;margin-right:15px;'>|</li>
			<li><a class="faqmenu" href="faqcont_2">
				Заправка катриджів		
			</a></li>
			<li style='margin-left:15px;margin-right:15px;'>|</li>
			<li><a class="faqmenu" href="faqcont_3">
				Блоки живлення
			</a></li>				
		</ul>

	<div class='swich-categories'>
		<div id="faqcont_1"> 
			<a href='#ultra'><div class='faqcont1-settings ultra' style='float:left;'></div></a>
			<a href='#games'><div class='faqcont1-settings games' style='float:right;'></div></a>
			<div class='text-settings'>Ультрабуки</div>
			<div class='text-settings'>Ігрові ноутбуки</div>
		</div>
		<div class="faqnone" id="faqcont_2">
			<a href='#catridge' class='a-catridge'>
				<div class='faqcont2-settings'></div>
				
			</a>
			
			<div class='text-settings'>Кольорові катриджи</div>
		</div>
		<div class="faqnone" id="faqcont_3">
			<a href='#ultra'><div class='faqcont3-settings bp' style='float:left;'></div></a>
			<a href='#games'><div class='faqcont3-settings bp2' style='float:right;'></div></a>
			<div class='text-settings'>Для комп'ютерів</div>
			<div class='text-settings'>Для телефонів</div>
		</div>
	</div>
</div>
	
<div class='personal'>
	<div class='personal-text'>
		<h1>Все у світі змінюється і не стоїть на місці. А в нас тим часом кадрові зміни.</h1>
		<h2>На місце досвідченим спеціалістам приходять молоді і перспективні!</h2>
		<div class='personal-photo-mobile'></div>
		<h3>Знайомтесь - <b>Влад</b>, тепер він відповідальний за прийом Вашої пошкодженої техніки, готовий відповісти на питання щодо послуг, ремонту, вартості техніки та комплектуючих.</h3>
		<h4>Дізнатись детальніше зможете на сторінці <a href='service.html' style='font-weight: normal;'>нашого сервісного центру</a> або за телефоном <a href='tell:+380679501842 ' style='font-weight: normal;'>067 950 18 42 </a></h4>
	</div>
	<div class='personal-photo'></div>
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
	</div>	
</footer>	
	
	
	
	
	
	
	
	
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script>
      var swiper = new Swiper(".mySwiper",	  {
	  
        slidesPerView: 4,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>