<?php

session_start();
include "db_conn.php"; 


?>


<html>
<head>
		<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/neA.css">
<title>المحطة المفضلة</title>
<link rel="shortcut icon" href="img/log.png" />
</head>
<body>

<div id="bgraound">


  <?php
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
				$user_ID= $sessData['userID'];
				
		?>
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
      <a href="PNUMap.php">خريطة الجامعة</a>
      <a href="aboutTrain.php">حول القطار</a>
	  <a href="menuAR.php"> معلومات عن المطاعم في الجامعة</a>
 </div>

<li><a href="index.php">English</a></li>
 
  </li>
</ul>
</nav>
</header>
       
<p>محطتك المفضلة</p>
<br/>
<center>
<form method="post" action="favoriteStationAR.php">
<select name="slc"   >
  <option value="blank">اختيار المحطة</option>
    
<?php
$stations=mysqli_query($conn,"select station_name from station ");
while($rows=mysqli_fetch_array($stations))
	{	?>
					
<option value="<?php echo $rows["station_name"];?>"  ><?php echo $rows["station_name"]; ?></option>

<?php  }  ?>
</select>

<input name="submit" type="submit" value="OK" ></center>
</form>

</div>
        <?php 
			
if(isset($_POST['slc'])){
$selected_val = $_POST['slc']; 
//echo "You have selected :" .$selected_val;  // Displaying Selected Value


 $check_station = mysqli_query($conn,"select f_station from favorite where f_station='$selected_val' and id='$user_ID'");
  if(mysqli_num_rows($check_station)==1 || $selected_val=="blank")
 {
 }
 
  else 
  {
	  //insert favorite station & User ID in database
	  $user_lmite = mysqli_query($conn, "SELECT id FROM favorite where id='$user_ID' ");  
                if(mysqli_num_rows($user_lmite) <3) {
   $sql2 = mysqli_query($conn,"INSERT INTO favorite (f_station,id) VALUES ('$selected_val','$user_ID')"); 
  }}
   } 
if(isset($_POST['deleteItem'])){
				$sqldelete= mysqli_query($conn, "DELETE FROM favorite where id='$user_ID' "); 
				 $empty_result = mysqli_query($conn, "SELECT f_station FROM favorite where id='$user_ID' ");  
                 while($row = mysqli_fetch_array($empty_result)){	
				 echo  $row["f_station"];			}	 }

//print the favorite stations for user
   $user_result = mysqli_query($conn, "SELECT f_station FROM favorite where id='$user_ID' ");  
                if(mysqli_num_rows($user_result) >= 1)  
                {  
                     while($row = mysqli_fetch_array($user_result))  
                     {  
                  ?><center><a class="favorite-station" href="showarrivalAR.php?station=<?php echo $row["f_station"];?>"> <?php echo $row["f_station"]; ?> </a><br/></center>
				 <?php } } 
				 ?><center><form method="post" action="favoriteStationAR.php">
				<input type="submit" name="deleteItem" value="إعادة تعيين" >
				</form></center><?php
				
$conn->close();
}else{ include "headerAR.html"; ?>
	<br/><p>محطتك المفضلة</p>
	<br/>
	<br/>
	<br/>
		 <script type="text/javascript">
		 alert( "يجب عليك تسجيل الدخول !");
		 window.location = "SignInAR.php";</script>
        <?php }
		include "footer.html";
?>
