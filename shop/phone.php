
<?php include('..\admin\shop\server\serveraddphone.php') ?>

<html>
<head>
<title>OXY - Твій друг електроніки</title>
	<link rel="stylesheet" type="text/css" href="..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="..\style\style-body.css">
	<link rel="stylesheet" type="text/css" href="..\style\room.css">	
	<link rel="stylesheet" type="text/css" href="..\style\news.css">		
	<link rel="stylesheet" type="text/css" href="..\style\phone.css">		
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="..\script\search.js"></script>
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
									 <a href="phone.php"><div>Смартфони та аксесуари</div></a>
									 <a href="pc.php"><div>Комп'ютери та ноутбуки</div></a>
									 <a href="pv.php"><div>Все для PC</div></a>
									 <a href="tv.php"><div>Телевізори</div></a>
									 <a href="..\service.php"><div>Сервісний центр</div></a>
									 <br> <br>
									 <a href='..\index.php'><div>Головна</div></a>
									 <a href='..\forus.php'><div>Про нас</div></a>
									 <a href='..\buspay.php'><div>Доставка та оплата</div></a>
									 <a href='..\shop.php'><div>Магазин</div></a>
									 <a href='..\contacts.php'><div>Контакти</div></a>
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
										
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op1">
												<span class="checkmark-filter-mobile"></span>
												<h2>Apple</h2>
											</label>
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op2">
												<span class="checkmark-filter-mobile"></span>
												<h2>Google</h2>
											</label>	
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op3">
												<span class="checkmark-filter-mobile"></span>
												<h2>Nokia</h2>
											</label>
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op4">
												<span class="checkmark-filter-mobile"></span>
												<h2>Oppo</h2>
											</label>
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op5">
												<span class="checkmark-filter-mobile"></span>
												<h2>Realme</h2>
											</label>
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op6">
												<span class="checkmark-filter-mobile"></span>
												<h2>Xiaomi</h2>
											</label>
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op7">
												<span class="checkmark-filter-mobile"></span>
												<h2>Poco</h2>
											</label>	
										</div>
										<div class='phone-filter-container-mobile'>
											<label class="container-filter-mobile">
												<input type="checkbox" data-toggle="op8">
												<span class="checkmark-filter-mobile"></span>
												<h2>Samsung</h2>
											</label>
										</div>
										
										
										
										<div class='phone-filter-categories'>
											<div></div>
										
							
										</div>
										<div class='phone-filter-search'>
											<div>Підібрати</div>
										
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
		<a href='..\index.php'><div class='logo'>OXY</div></a>
	
		<a href='..\store.php'><div class='header-right-logo store'></div></a>
	
		<div class='header-right'>
			<a href='..\room\index.php'>Ввійти</a>		
			<a href='..\like.php'>Вибране</a>
			<a href='..\store.php'>Кошик</a>	
		</div>
	</div>
		<div class='header-menu'>
			<input type="text" id="mySearch" onkeyup="myFunction()" size="40" placeholder="Пошук на сайті"  maxlength='20'>
			<div class='header-input'>
				<div class='header-input-search'>
					<ul id="myMenu">
					  <li><a href="phone.php">Смартфони та аксесуари</a></li>
					  <li><a href="pc.php">Комп'ютери та ноутбуки</a></li>
					  <li><a href="pv.php">Все для PC</a></li>
					  <li><a href="tv.php">Телевізори</a></li>
					  <li><a href="..\service.php">Сервісний центр</a></li>
					  
					  <li><a href='..\forus.php'>Про нас</a></li>
					  <li><a href='..\buspay.php'>Доставка та оплата</a></li>
					  <li><a href='..\shop.php'>Магазин</a></li>
					  <li><a href='..\contacts.php'>Контакти</a></li>
					  
					  <li><a href='phone.php'>Apple<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Google<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Nokia<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Oppo<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Realme<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Xiaomi<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Poco<sup>Смартфони та аксесуари</sup></a></li>
					  <li><a href='phone.php'>Samsung<sup>Смартфони та аксесуари</sup></a></li>
					  
					  <li><a href='pc.php'>Apple<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>MSI<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>Lenovo<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>HP<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>Dell<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>Acer<sup>Ноутбуки </sup></a></li>
					  <li><a href='pc.php'>Asus<sup>Ноутбуки </sup></a></li>
					  
					  <li><a href='contacts.php'> <sup> </sup></a></li>
					  
					</ul>
				</div>
			</div>
			<div class='header-text' >
				<a href='phone.php' class='line'><span>Смартфони та аксесуари</span></a>
				<a href='pc.php' class='line'><span>Комп'ютери та ноутбуки</span></a>
				<a href='pv.php' class='line'><span>Все для PC</span></a>
				<a href='tv.php' class='line'><span>Телевізори та аксесуари</span></a>
				<a href='..\service.php' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
	</header>
<div class='header-margin'></div>	

	<div class='phone-position'>
		<div class='phone-filter'>
			<label for="pseudoBtn-filter" class="btn" >
			<div class='phone-filter-zagolovok'>Фільтри</div>
	
	<div class='container-filter-table'>							
		<label class="container-filter">
			<input type="checkbox" data-toggle="op1" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Apple</h2>
        </label>
		
		<label class="container-filter">
			<input type="checkbox" data-toggle="op2" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Google</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op3" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Nokia</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op4" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Oppo</h2>
        </label>
	</div>
	<div class='container-filter-table'>		
		<label class="container-filter">
			<input type="checkbox" data-toggle="op5" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Realme</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op6" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Xiaomi</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op7" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Poco</h2>
		</label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op8" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Samsung</h2>
		</label>
	</div>
	
	
	
	<div class='container-filter-table'>		
		<label class="container-filter">
			<input type="checkbox" data-toggle="op9" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Флагман</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op10" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Вологозахист</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op11" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Камерофон</h2>
		</label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="12" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Фаблет</h2>
		</label>
	</div>
	
	
	
	<div class='container-filter-table'>		
		<label class="container-filter">
			<input type="checkbox" data-toggle="op13" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>Ультратонкий</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op14" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>FaceID</h2>
        </label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op15" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>NFC</h2>
		</label>
		<label class="container-filter">
			<input type="checkbox" data-toggle="op16" class="checkbox-input">
				<span class="checkmark-filter "></span>
					<h2>microSD</h2>
		</label>
	</div>
	





		</div>
	
		
	
	
		<div class='phone-tovary'>
			<div class='phone-tovar-zagolovok'>Смарфони та аксесуари</div>
	
		<?php
			include "..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `phone` ORDER BY id DESC");
					
					while ($ulist = mysqli_fetch_assoc($resultul))
					{	
		
		?>
		
		<div class="item_box">	
			<div class='phone-tovar'>	
				<div class='catalog-products-wrapper' >
				
					<div class='phone-tovar-list'>	
						<div class='phone-tovar-img'>
							<img src='<?php echo $ulist['img'] ?>'/>
						</div>
						<div class='phone-tovar-info'>
							<div class='phone-tovar-name'>
								<div class='item_title'><?php echo $ulist['name'] ?><sup><?php echo $ulist['memory'] ?></sup></div>
							</div>
							
							<div class='phone-tovar-categories'>
								<?php
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
								?>	
							</div>
							<div class='phone-tovar-opus'>
								<?php
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
								?>	
							</div>
						</div>
						
						<div class='phone-tovar-price'>
							<?php
								if ($ulist['sale']==1){
									echo '<span class=phone-tovar-lineprice>'.$ulist['price'].'</span>';
									echo '<span class=phone-tovar-lineprice>'.'грн.'.'</span>';
									echo '<span class=phone-tovar-saleprice>';
							?>
									<span class='item_price'><?php echo $ulist['saleprice'] ?></span>
							<?php
									echo '</span>';
									echo '<span class=phone-tovar-saleprice>'.'грн.'.'</span>';
								};
								if ($ulist['sale']==0){
									echo '<span class=phone-tovar-biglineprice>';
							?>
									<span class='item_price'><?php echo $ulist['price'] ?></span>
							<?php
									echo '</span>';
									echo '<span class=phone-tovar-biglineprice>'.'грн.'.'</span>';
									
								};
							?>
						
								
						</div>
								<button class="phone-instore add_item" data-id="<?php echo $ulist['apple'] ?>">В кошик</button>	
							
						
				
							
						
						
						
						
						
						
						
						
						
						
						</div>
						
					</div>
				</div>
			</div>
	
	<?php


				}
			?>	

		</div>
		
	</div>

<script>
$('.checkbox-filter').ready(function() {
  $('.checkbox-input').change(function() {
    var dat = $(this).attr('data-toggle');
    if ($(this).is(':checked')) {
      $('#item-card').addClass('hidden')
      $('.' + dat).addClass('visible'); //условие
      $(this).closest('.content-wrapper').find('.filter-button-absolute').show();
    } else {
      $('#item-card').removeClass('hidden');
      $('.' + dat).removeClass('visible');
      $(this).closest('.content-wrapper').find('.filter-button-absolute').hide();
    }
  });
});
</script>


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
		cartData[itemId] = [itemTitle, itemPrice, 1];
	} 	
	if(!setCartData(cartData)){ 
		this.disabled = false; // разблокируем кнопку после обновления LS
		cartCont.innerHTML = 'Товар добавлен в корзину.';
		setTimeout(function(){
			cartCont.innerHTML = '';
		}, 4000);
	}
	return false;
}
for(var i = 0; i < itemBox.length; i++){
	addEvent(itemBox[i].querySelector('.add_item'), 'click', addToCart);
}
/* Открыть корзину */
addEvent(d.getElementById('checkout'), 'click', openCart);
/* Очистить корзину */
addEvent(d.getElementById('clear_cart'), 'click', function(e){
	localStorage.removeItem('cart');
	cartCont.innerHTML = 'Корзина очишена.';	
});
</script>


</body>
</html>