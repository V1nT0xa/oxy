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
<?php include('..\admin\shop\server\serveraddphone.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="style/room.css">	
	<link rel="stylesheet" type="text/css" href="..\style\news.css">	
	<link rel="stylesheet" type="text/css" href="..\style\phone.css">	
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
								
									
							
									 <a href="..\shop\phone.php"><div>Смартфони та аксесуари</div></a>
									 <a href="..\shop\pc.php"><div>Комп'ютери та ноутбуки</div></a>
									 <a href="..\shop\pv.php"><div>Все для PC</div></a>
									 <a href="..\shop\tv.php"><div>Телевізори</div></a>
									 <a href="..\service.php"><div>Сервісний центр</div></a>
									 <br> <br>
									 <a href='..\index.php' class='line'><div>Магазин</div></a>
									<a href='index.php' class='line'><div>Профіль</div></a>
									<a href='news.php' class='line'><div>Новини</div></a>
									<a href='saleshop.php' class='line'><div>Товари зі знижками</div></a>
									<a href='promo.html' class='line'><div>Реферальна система</div></a>
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
			<a href='..\store.php'>Кошик</a>	
			<a href="index.php?logout='1'" >Вийти</a>
		</div>
	</div>
		<div class='header-menu'>
		
			<div class='header-text' >
				<a href='..\index.php' class='line'><span>Магазин</span></a>
				<a href='index.php' class='line'><span>Профіль</span></a>
				<a href='news.php' class='line'><span>Новини</span></a>
				<a href='saleshop.php' class='line'><span>Товари зі знижками</span></a>
			
				<a href='promo.php' class='line'><span>Реферальна система</span></a>
				<a href='..\service.php' class='line'><span>Сервісний центр</span></a>
			</div>
		</div>
	</header>
<div class='header-margin'></div>		
		
<div class='phone-position'>
		<div class='room-tovary'>
			<div class='phone-tovar-zagolovok'>Товари зі знижками</div>
			
			<?php
			include "..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `phone` ORDER BY id DESC");
					
					while ($ulist = mysqli_fetch_assoc($resultul))
					{
						
					if ($ulist['sale']==1){
					
					?>
		<div class='phone-tovar'>	
			<div class="item_box">
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
					}
			?>	
		</div>
<div class='room-filter'>
			<div class='news-add'>
				<a href='news.php'><div class='news-old'>Новини</div></a>
				<div class='news-img'>
					<img src='<?php
									include "..\userslist.php";
					
									$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY `id` DESC LIMIT 1");
					
									while ($ulist = mysqli_fetch_assoc($resultul))
			{
				echo $ulist['img'];
				echo "<br>";
			}
		?>'>
	</div>
	<div class='news-tema'>
		<?php
			include "..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY `id` DESC LIMIT 1");
					
			while ($ulist = mysqli_fetch_assoc($resultul))
			{
				echo $ulist['tema'];
				echo "<br>";
			}
		?>
	</div>
	<div class='news-zagolovok'>
		<?php
			include "..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY `id` DESC LIMIT 1");
					
			while ($ulist = mysqli_fetch_assoc($resultul))
			{
				echo $ulist['zagolovok'];
				echo "<br>";
			}
		?>
	</div>
	<div class='news-text'>
		<?php
			include "..\userslist.php";
					
			$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY `id` DESC LIMIT 1");
					
			while ($ulist = mysqli_fetch_assoc($resultul))
			{
				echo $ulist['text'];
				echo "<br>";
			}
		?>
	</div>
</div>

	<div class='news-all'>
		<div>
			<?php
				include "..\userslist.php";
						
				$resultul = mysqli_query($ul,"SELECT * FROM `news` ORDER BY id DESC");
						
				while ($ulist = mysqli_fetch_assoc($resultul))
				{
					echo ' <a  class=news-href href=news.php#'.$ulist['id'].'>'.$ulist['tema']. '</a>';
					echo '<div class=news-all-border></div>';		
				}
			?>
	</div>

</div>

</div>
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