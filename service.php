<?php include('admin/zayavka/serverzayavka.php') ?>
<html>
<head>
<title>Сервісний центр - OXY</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/service.css">	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

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
	
		<a href=''><div class='header-right-logo store'></div></a>
	
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
<div class='service-opacity'></div>	
<div class='poslygu'></div>
<h3 class="slider_text wow animated fadeInDown" data-wow-delay="0.3s">Сервісний центр в OXY<span>!</span></h3>
<div class='ourwork'>Що ми зробимо для вас</div>	 
<div class='ourwork-table'>
	<div class='ourwork-block'>
		<a href='#repair'>
		<div class='ourwork-photo repair'>
			<h1>Ремонт</h1>
		</div>
		<h2>Проводимо модернізацію, ремонт та заміну гнізд, портів, відновлення материнських плат, заміну BGA чіпів, ремонт та заміну корпусів, заміну матриць</h2>
		</a>
	</div>
	<div class='ourwork-img ourwork-block-mobile'></div>
	<div class='ourwork-block'>
		<a href='#printer'>
		<div class='ourwork-photo printer'>
			<h1>Заправка катриджів</h1>
		</div>
		<h2>Проводимо заміну,чищення та зміну катриджів для вашого принтера</h2>
		</a>
	</div>
	<div class='ourwork-block'>
		<a href='#diag'>
		<div class='ourwork-photo diag'>
			<h1>Діагностика</h1>
		</div>
		<h2>Проводимо діагностику ноутбуків та ПК, профілактику, налаштування операційних систем</h2>
		</a>
	</div>
	<div class='ourwork-block-mobile' style='background-color:#fff'></div>
	<div class='ourwork-block'>
		<a href='#pc'>
		<div class='ourwork-photo pc'>
			<h1>Збір ПК</h1>
		</div>
		<h2 id='repair'>Проводимо збір комп'ютера для вашого навчання,роботи та дозвілля.Пропонуєм готові варіанти комп'ютерів</h2>
		</a>
	</div>
</div>

	
<div class='ourwork'>Чому нам варто довіряти?</div>	
<div class='repair-zagolovok-mobile'>

	<div class='diag-text-mobile'>
		<div class='repair-li-mobile'>	
			<li>зручне розташування (маг «Соломон» другий поверх);</li>
			<li>наявність сучасного професійного обладнання;</li>
			<li>у нас працюють спеціалісти з профільною освітою та величезним досвідом роботи;</li>
			<li>ндивідуальний підхід до кожного клієнта;</li>
			<li>узгодження з клієнтом переліку та вартості робіт до проведення ремонту;</li>
			<li>якісне та швидке надання послуг;</li>
			<li>доступні ціни;</li>
			<li>оплата тільки за результат;</li>
			<li>гарантія на всі встановлені запчастини;</li>
			<li id='diag'>привітний персонал</li>
		</div>
	</div>
		<div class='personal-photo-mobile'></div>
</div>
<div class='ourwork-mobile' >Ремонт</div>
<div class='repair-zagolovok'>
	<div class='repair-text'>
		Як правило, ноутбук виходить з ладу несподівано. Він не вмикається або ж самовільно вимикається, пропало зображення або постійно перегружається, не заряджається або перестала працювати клавіатура, розхиталися гнізда та порти, розбився дисплей або на ноутбук вилилась рідина, пропав інтернет або з’явилися віруси, перегрівається, шумить, тормозить…
		<br><br>Спеціалісти OXY швидко, якісно та надійно нададуть весь спектр послуг з проведення:
		<div class='repair-li'>	
			<li>профілактики (аппаратної чистки з заміною термоінтерфейсу) комп`ютерної техніки;</li>
			<li>відновленню материнських плат після залиття, грози, перегріву тощо;</li>
			<li>ремонту / заміни матриць (дисплеїв) та сенсорів;</li>
			<li>ремонту / заміни корпусних деталей;</li>
			<li>ремонту / заміни портів, гнізд та роз’ємів живлення;</li>
			<li>ремонту / заміни блоків живлення;</li>
			<li>ремонту / обслуговування принтерів;</li>
			<li>відновлення / перепрошивку BIOS;</li>
		</div>
		<div class='repair-meneger'>
			Наші менеджери нададуть Вам консультацію щодо поломки та допоможуть підібрати найоптимальніші варіанти по вирішенню проблем з Вашою технікою.
		</div>
	</div>
	<div class='repair-photo'></div>
</div>


<div class='ourwork-mobile'>Діагностика</div>	
<div class='repair-zagolovok'>

	<div class='repair-text'>
		Діагностика ноутбука допомагає переконатися в тому, що Вашому ноутбуку нічого не загрожує або виправити поточні несправності. Це стосується як визначення несправностей технічного характеру, так і несправностей програмного характеру та їх усування.
		<br><br>Діагностика займає мінімум часу, і допомагає зрозуміти, що трапилося з Вашим комп’ютером або ноутбуком. У разі, якщо неполадка буде не дуже складною ми виправимо її на місці, і знову налагодимо нормальну роботу комп’ютера або ноутбука! У випадку серйозної проблеми, час діагностики може тривати більш тривалий час. Найбільш тривалий час займає діагностика  поломок внаслідок перепадів напруги, залиття рідиною, коротких замикань на платі.
		
		<div class='repair-meneger' >
			З нашою діагностикою комп’ютера (ноутбука) Ви заощадите і час і гроші!
		</div>
		<span id='printer'></span>
	</div>
	<div class='diag-photo' ></div>
</div>
	
<div class='ourwork-mobile'>Заправка катриджів</div>	
<div class='repair-zagolovok'>
	<div class='printer-photo'></div>
	<div class='diag-text'>
		Обслуговувати власний принтер вчасно та якісно - це запорука довготривалої та якісної роботи вашого принтера.
		<br><br>Якщо у Вас виникли проблеми з принтером, тоді Вам до нас! А саме до Віктора!
		<br><br>Віктор - працівник Сервісного Центру OXY, спеціалізується на ремонті та сервісному обслуговуванні принтерів. Надасть необхідну консультацію, навчить, як правильно користуватись принтером, щоб він довго і вірно служив Вам. Тому, не зволікайте, заходьте і ваша техніка буде Вам вдячна!
	
	</div>
</div>	
	
<div class='ourwork-mobile' id='pc'>Збір ПК</div>	
<div class='zborka-zagolovok'>
	<div class='zborka-photo'></div>
	<div class='zborka-text'>
		Складання комп'ютера включає як би два трохи різних поняття. Перше - це планування та складання на папері або в інтернеті по всіх "запчастинах", а друге - це коли вже руками підключаєте всі ці комплектуючі.
		І так і так можна це називати збиранням ПК.
		<br><br>Найголовніша проблема у збиранні системного блоку в тому, що не всі комплектуючі (а саме так називаються ці "запчастини") можуть підходити один до одного. Тому цілком може виявитися так, що начебто Ви і вибрали найкрасивіше і дороге, а вони в результаті можуть не зібратися в одну повноцінну систему - системний блок.
		<br><br>Саме тут Вам пригодиться OXY,в нас є компетентні в цій сфері працівники,які проконсольтують та обговорять про всі комплектуючі разом з Вами.Після Вашого вирішення приступлять до своєї роботи,в результаті якої Ви отримаєте надійний комп'ютер,який буде з Вами протягом багатьох років.
		<br><br>Чекаємо Вас в нашому сервіс центрі OXY 
	</div>
</div>		
	
	
	
<div class='service-forma'>
	<div class='service-forma-image'>
	
	</div>
	<form method="post" action="service.php" style='display:inline-block;float:right; margin-right:10%;'>
				<input type="text" size="40" placeholder="Ваше ім'я" required pattern='^[А-Яа-яЁё\s]+$' class='stylecontact' name="name">
				<p><input type="text" size="40" placeholder="Ваш номер телефону" required pattern='[0-9]{10,12}' class='stylecontact' name="phone"></p>
				<p><input type="text" size="40" placeholder="Вкажіть послугу/проблему?"  class='stylecontact' name="text"></p>
				
				<input type="submit" value="Відправити" name='zayavka' class='service-forma-button '>
		</form>
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
</body>
</html>