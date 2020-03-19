<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
				
		?> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset= "utf-8">
 <link rel="stylesheet" type="text/css" href="style/neA.css">
 </head>
<header>
<nav>
<div id="header">
قطار جامعة الأميرة نورة بنت عبدالرحمن
<br/>
    <a href="userAccountAR.php?logoutSubmit=1" class="logout">الخروج</a>
</div>
 
<ul >
 <li><a href="HomeAR.php">الصفحة الرئيسية</a></li>
  <li><a href="SignInAR.php">تسجيل الدخول</a></li>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">المزيد</a>
    <div class="dropdown-content">
      <a href="PNUMapAR.php">خريطة الجامعة</a>
      <a href="aboutTrainAR.php">حول القطار</a>
	  <a href="menuAR.php"> معلومات عن المطاعم في الجامعة</a>
 </div>

<li><a href="index.php">English</a></li>
 
  </li>
</ul>
</nav>
</header>
       
</body>
</html>
<?php  } else {include "headerAR.html"; }  ?>