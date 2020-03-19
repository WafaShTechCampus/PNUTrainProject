<?php 

session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

?>
<html>
<head>
<link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>



        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
			
		?>

<header>
<nav>
<div id="header">
PNU Train
<br/>
 <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
</div>
<ul >
 <li><a href="index.php">Home</a></li>
  <li><a href="SignIn.php">Sign In</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">More</a>
    <div class="dropdown-content">
      <a href="PNUMap.php">PNU Map</a>
      <a href="aboutTrainEN.php">About Train</a>
	  <a href="menu.php">Rasturant Info</a>
 </div>

<li><a href="HomeAR.php">عربي</a></li>
 
  </li>
</ul>
</nav>
</header>
</html>
<?php  } else {include "header.html"; }  ?>