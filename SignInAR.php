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
    <title>تسجيل الدخول</title>
	<meta charset="UTF-8">
<link rel="shortcut icon" href="img/log.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style/neA.css"/>
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
				//<script type="text/javascript"> alert( "Welcome <?php echo $userData['first_name']; !");</script>
		?>

<header>
<nav>
<div id="header">
PNU Train
<br/>
 <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
</div>

<ul >

 <li><a href="HomeAR.php">Home</a></li>
  <li><a href="SignInAR.php">Sign In</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">More</a>
    <div class="dropdown-content">
      <a href="PNUMapAR.php">PNU Map</a>
      <a href="aboutTrainAR.php">About Train</a>
	  <a href="menuAR.php">Rasturant Info</a>
 </div>

<li><a href="EN.php">EN</a></li>
 
  </li>
</ul>
</nav>
</header>
       

       
	
        <script type="text/javascript">
		 alert( " <?php echo $userData['first_name']; ?> أهلا بك");
		 window.location = "favoriteStationAR.php";</script> <?php 
		}else{ 
		include "headerAR.html";
         	?>
			<body>
			<center>
		<h2>تسجيل الدخول</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccountAR.php" method="post">
				<input type="email" name="email" placeholder="الإيميل" required=""><br/>
				<input type="password" name="password" placeholder="كلمة المرور" required=""><br/>
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="الدخول">
				</div>
			</form>
			</center>
            <p class="one">لا يوجد لديك حساب؟<a href="registrationAR.php"> التسجيل </a></p>
		</div>
		</div>
        <?php } ?>
	
	<?php include "footer.html";?>
</body>
</html>
        
