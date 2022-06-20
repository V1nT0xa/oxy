
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
<?php include('server/serveraddphone.php') ?>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?></title>
	<link rel="stylesheet" type="text/css" href="..\..\style\menu.css">	
	<link rel="stylesheet" type="text/css" href="..\adminpanel.css">	
	<link rel="stylesheet" type="text/css" href="..\news\addnews.css">	
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
					
					<div class='menu-all-div'>				
						<div class='menu-all-div-child'>
								<div class='menu-all-div-1'>
									<a href='phone.php' class='line'><div>Смартфони та аксесуари</div></a>
									<a href='pc.php' class='line'><div>Комп'ютери та ноутбуки</div></a>
									<a href='pv.php' class='line'><div>Все для PC</div></a>
									<a href='tv.php' class='line'><div>Телевізори та аксесуари</div></a>
									<a href='service.html' class='line'><div>Сервісний центр</div></a>
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
		<a href='index.html'><div class='logo'>Добавлення смартфону</div></a>
	
		<div class='header-right-logo store'></div>
	
		<div class='header-right'>

			<a href="..\adminpanel.php" >Повернутись</a>
		</div>
	</div>
		
	</header>
<div class='addnews'></div>	
  <form method="post" action="addphone.php">
	<div class="input-group">
  	  <label>Фото</label>
  	  <input type="img" name="img" >
  	</div>	
  	<div class="input-group">
  	  <label>Назва</label>
  	  <input type="name" name="name" maxlength="30">
  	</div>
	
  	<div class="input-group">
  	  <label>Ціна(грн)</label>
  	  <input type="price" name="price" >
  	</div>
	<label>Знижка</label>
		<input type="checkbox" name="sale" id="sale" value="1"  />
	<label>Знижена ціна</label>
		<input type="saleprice" name="saleprice" >
	
	<div class='input-categories'>
		<label>Apple</label>
			<input type="checkbox" name="apple" id="apple" value="1"  />
	<br>
		<label>Google</label>
			<input type="checkbox" name="google" id="google" value="2"  />
	<br>
		<label>Nokia</label>
			<input type="checkbox" name="nokia" id="nokia" value="3"  />
	<br>
		<label>OPPO</label>
			<input type="checkbox" name="oppo" id="oppo" value="4"  />
	<br>
		<label>Realme</label>
			<input type="checkbox" name="realme" id="realme" value="5"  />
	<br>
		<label>Xiaomi</label>
			<input type="checkbox" name="xiaomi" id="xiaomi" value="6"  />
	<br>
		<label>Poco</label>
			<input type="checkbox" name="poco" id="poco" value="7"  />
	<br>		
		<label>Samsung</label>
			<input type="checkbox" name="samsung" id="samsung" value="8"  />
	</div>
	
	<div class="input-group">
  	  <label>Пам'ять:</label>
  	  <input type="setsearch1" name="memory" >
  	</div>
	<div class="input-group">
  	  <label>Екран:</label>
  	  <input type="setsearch1" name="display" >
  	</div>
	<div class="input-group">
  	  <label>Камера:</label>
  	  <input type="setsearch1" name="camera" >
  	</div>
	<div class="input-group">
  	  <label>Процесор:</label>
  	  <input type="setsearch1" name="proc" >
  	</div>
	<div class="input-group">
  	  <label>Батарея:</label>
  	  <input type="setsearch1" name="battery" >
  	</div>
	<div class="input-group">
  	  <label>Вага:</label>
  	  <input type="setsearch1" name="weight" >
  	</div>

	
	<div class='input-categories'>
		<label>флагман</label>
			<input type="checkbox" name="addinfo1" id="addinfo1" value="1"  />
	<br>
		<label>вологозахист </label>
			<input type="checkbox" name="addinfo2" id="addinfo2" value="1"  />
	<br>
		<label>камерофон </label>
			<input type="checkbox" name="addinfo3" id="addinfo3" value="1"  />
	<br>
		<label>фаблет </label>
			<input type="checkbox" name="addinfo4" id="addinfo4" value="1"  />
	<br>
		<label>ультратонкий</label>
			<input type="checkbox" name="addinfo5" id="addinfo5" value="1"  />
	<br>
		<label>FaceID </label>
			<input type="checkbox" name="addinfo6" id="addinfo6" value="1"  />
	<br>
		<label>NFC</label>
			<input type="checkbox" name="addinfo7" id="addinfo7" value="1"  />	
	<br>
		<label>microSD </label>
			<input type="checkbox" name="addinfo8" id="addinfo8" value="1"  />	
	<br>
		<label>без microSD </label>
			<input type="checkbox" name="addinfo9" id="addinfo9" value="1"  />	
	<br>
		<label>бездротова зарядка </label>
			<input type="checkbox" name="addinfo10" id="addinfo10" value="1"  />	
	<br>
		<label>fast charge</label>
			<input type="checkbox" name="addinfo11" id="addinfo11" value="1"  />	
	<br>
		<label>стерео </label>
			<input type="checkbox" name="addinfo12" id="addinfo12" value="1"  />	
	<br>
		<label>немає 3.5 мм</label>
			<input type="checkbox" name="addinfo13" id="addinfo13" value="1"  />	
	<br>
		<label>Wi-Fi 6</label>
			<input type="checkbox" name="addinfo14" id="addinfo14" value="1"  />	
	<br>				
	</div>
  	<div class="input-group">
  	  <button type="submit" class="addbtn" name="add_phone">Опублікувати</button>
  	</div>
	
  </form>	

</body>
</html>