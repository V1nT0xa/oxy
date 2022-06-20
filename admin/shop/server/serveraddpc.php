<?php

$as = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['add_phone'])) {
 
  $img = mysqli_real_escape_string($as, $_POST['img']);
  $name = mysqli_real_escape_string($as, $_POST['name']);
  $price = mysqli_real_escape_string($as, $_POST['price']);
  $sale = mysqli_real_escape_string($as, $_POST['sale']);
  $saleprice = mysqli_real_escape_string($as, $_POST['saleprice']);
  $apple = mysqli_real_escape_string($as, $_POST['apple']);
  $apple = mysqli_real_escape_string($as, $_POST['google']);
  $apple = mysqli_real_escape_string($as, $_POST['nokia']);
  $apple = mysqli_real_escape_string($as, $_POST['oppo']);
  $apple = mysqli_real_escape_string($as, $_POST['realme']);
  $apple = mysqli_real_escape_string($as, $_POST['xiaomi']);
  $apple = mysqli_real_escape_string($as, $_POST['poco']);
  $apple = mysqli_real_escape_string($as, $_POST['samsung']);
  $memory = mysqli_real_escape_string($as, $_POST['memory']);
  $display = mysqli_real_escape_string($as, $_POST['display']);
  $camera = mysqli_real_escape_string($as, $_POST['camera']);
  $video = mysqli_real_escape_string($as, $_POST['video']);
  $proc = mysqli_real_escape_string($as, $_POST['proc']);
  $battery = mysqli_real_escape_string($as, $_POST['battery']);
  $weight = mysqli_real_escape_string($as, $_POST['weight']);
  
  $addinfo1 = mysqli_real_escape_string($as, $_POST['addinfo1']);
  $addinfo2 = mysqli_real_escape_string($as, $_POST['addinfo2']);
  $addinfo3 = mysqli_real_escape_string($as, $_POST['addinfo3']);
  $addinfo4 = mysqli_real_escape_string($as, $_POST['addinfo4']);
  $addinfo5 = mysqli_real_escape_string($as, $_POST['addinfo5']);
  $addinfo6 = mysqli_real_escape_string($as, $_POST['addinfo6']);
  $addinfo7 = mysqli_real_escape_string($as, $_POST['addinfo7']);
  $addinfo8 = mysqli_real_escape_string($as, $_POST['addinfo8']);
  $addinfo9 = mysqli_real_escape_string($as, $_POST['addinfo9']);
  $addinfo10 = mysqli_real_escape_string($as, $_POST['addinfo10']);
  $addinfo11 = mysqli_real_escape_string($as, $_POST['addinfo11']);
  $addinfo12 = mysqli_real_escape_string($as, $_POST['addinfo12']);
  $addinfo13 = mysqli_real_escape_string($as, $_POST['addinfo13']);
  $addinfo14 = mysqli_real_escape_string($as, $_POST['addinfo14']);

  $user_check_query = "SELECT * FROM pc WHERE name='$name' LIMIT 1";
  $result = mysqli_query($as, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (count($errors) == 0) {

  	$aquery = "INSERT INTO pc (img, name, price, sale, saleprice, apple, google, nokia, oppo, realme, xiaomi, poco, samsung, memory, display, camera, proc, battery, weight, addinfo1, addinfo2, addinfo3, addinfo4, addinfo5, addinfo6, addinfo7, addinfo8, addinfo9, addinfo10, addinfo11, addinfo12, addinfo13, addinfo14) 
  			  VALUES('$img', '$name', '$price', '$sale', '$saleprice', '$apple', '$google', '$nokia', '$oppo', '$realme', '$xiaomi', '$poco', '$samsung', '$memory', '$display', '$camera', '$proc', '$battery', '$weight', '$addinfo1', '$addinfo2', '$addinfo3', '$addinfo4', '$addinfo5', '$addinfo6', '$addinfo7', '$addinfo8', '$addinfo9', '$addinfo10', '$addinfo11', '$addinfo12', '$addinfo13', '$addinfo14')";
  	mysqli_query($as, $aquery);
  	$_SESSION['name'] = $name;

  	header('location: ..\adminpanel.php');
  }
}
?>
