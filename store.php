
<?php include('admin/shop/server/serveraddphone.php') ?>

<html id='store'>
<head>
<title>OXY - Твій друг електроніки</title>
	<link rel="stylesheet" type="text/css" href="style/menu.css">	
	<link rel="stylesheet" type="text/css" href="style/style-body.css">
	<link rel="stylesheet" type="text/css" href="style/room.css">	
	<link rel="stylesheet" type="text/css" href="style/news.css">		
	<link rel="stylesheet" type="text/css" href="style/phone.css">		
	<link rel="stylesheet" type="text/css" href="style/store.css">	
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
<div class='menu-mobile-none'>
<input type="checkbox" id="pseudoBtn-filter">
	<div class="menubuttonanim-filter">
	<ul class="button-filter button-1-filter">
		<div id="container-filter">
			<ul id="menu-filter">
				<div class='menu-all-header-filter'></div>	
			
					<div class='menu-all-div-filter'>				
						<div class='menu-all-div-child-filter'>
								<div class='menu-all-div-1-filter'>
									<div class='phone-filter-zagolovok'>Фільтри</div>
										
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Apple</h2>
											</label>
										</div>
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Google</h2>
											</label>	
										</div>
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Poco</h2>
											</label>	
										</div>
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Realme</h2>
											</label>
										</div>
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Samsung</h2>
											</label>
										</div>
										<div class='phone-filter-container'>
											<label class="container-filter">
												<input type="checkbox">
												<span class="checkmark-filter"></span>
												<h2>Xiaomi</h2>
											</label>
										</div>
										
										
										<div class='phone-filter-categories'>
											<div></div>
										
							
										</div>
										
										
										
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
	
		<div class='store-reload' id='store'></div>
	
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



	<div class='store-table'>
		<div id="cart_content"></div>
	
		<div class='store-price'>
			<div class='store-text'>До сплати:</div>
			<div class='store-value'><div id="res" style="font-weight:bold"></div></div>
		</div>
		<p><button class='store-cleanstore' id="clear_cart">Очистити кошик</button></p>
	</div>
	





    
    


<script type="text/javascript">
var d = document,
    itemBox = d.querySelectorAll('.item_box'), // блок каждого товара
		cartCont = d.getElementById('cart_content'); // блок вывода данных корзины
// Функция кроссбраузерная установка обработчика событий
function addEvent(elem, type, handler){
  if(elem.addEventListener){
    elem.addEventListener(type, handler, false);
  }
  return false;
}
// Получаем данные из LocalStorage
function getCartData(){
	return JSON.parse(localStorage.getItem('cart'));
}
// Записываем данные в LocalStorage
function setCartData(o){
	localStorage.setItem('cart', JSON.stringify(o));
	return false;
}
function addToCart(e){
	this.disabled = true; // блокируем кнопку на время операции с корзиной
	var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
			parentBox = this.parentNode, // родительский элемент кнопки &quot;Добавить в корзину&quot;
			itemId = this.getAttribute('data-id'), // ID товара
			itemTitle = parentBox.querySelector('.item_title').innerHTML, // название товара
			itemPrice = parentBox.querySelector('.item_price').innerHTML; // стоимость товара
		

	
	if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству
		cartData[itemId][2] += 1;
	} else { // если товара в корзине еще нет, то добавляем в объект
		cartData[itemId] = [itemTitle, itemPrice,  1];
	} 	
	if(!setCartData(cartData)){ 
		this.disabled = false; // разблокируем кнопку после обновления LS
		cartCont.innerHTML = 'Товар добавлений в кошик.';
		setTimeout(function(){
			cartCont.innerHTML = '';
		}, 4000);
	}
	return false;
}


 

// Открываем корзину со списком добавленных товаров

function openCart(e){
	var td = document.getElementById("tbl");
  
	
	
	
	var cartData = getCartData(), // вытаскиваем все данные корзины
			totalItems = '';
	console.log(JSON.stringify(cartData));
	// если что-то в корзине уже есть, начинаем формировать данные для вывода
	if(cartData !== null){
		totalItems = '<table class="shopping_list"><tr><th>Назва</th><th>Ціна</th><th>Кількість</th></tr>';
		for(var items in cartData){
	
			totalItems += '<tr >';
			for(var i = 0; i < cartData[items].length; i++){
				totalItems += '<td>' + cartData[items][i] + '</td>';
				
			}
			totalItems += '</tr>';
			
		}
		totalItems += '<table>';
		cartCont.innerHTML = totalItems;
	} else {
	
		cartCont.innerHTML = 'В корзині порожньо!';
	}
	return false;
}
/* Открыть корзину */
addEvent(d.getElementById('store'), 'mousemove', openCart);
/* Очистить корзину */
addEvent(d.getElementById('clear_cart'), 'click', function(e){
	localStorage.removeItem('cart');
	cartCont.innerHTML = 'Корзина очишена.';	
});
</script>
	<script>
var sum = 0;
  $('#tbl tr').each(function(){
      sum+=parseInt($('td', this).text());
  });
  $('#res').html(sum);
</script>
	
	
	


</body>
</html>