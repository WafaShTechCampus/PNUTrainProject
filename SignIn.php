<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign IN</title>
	
<link rel="shortcut icon" href="img/log.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style/style.css"/>
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

 <li><a href="EN.php">Home</a></li>
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

       
		<br/><br/>
		<script type="text/javascript">
		 alert( "Welcome <?php echo $userData['first_name']; ?>");
		 window.location = "favoriteStation.php";</script>
        <?php 
		}else{ include "header.html";
         	?>
			<body><center>
		<h2>Login to Your Account</h2><br/>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="EMAIL" required=""><br/>
				<input type="password" name="password" placeholder="PASSWORD" required=""><br/>
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="LOGIN">
				</div>
			</form></center>
            <p class="one">Don't have an account? <a href="registration.php"> Register</a></p><br/><br/><br/>
		</div>
        <?php } ?>
	</div>
	
</body>
</html>
<?php
include "footer.html";
 ?>