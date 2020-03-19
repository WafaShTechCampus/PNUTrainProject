<?php

session_start();
include "db_conn.php";
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}


?>



	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/style.css">
<title>Favorite Station</title>
		<meta charset="UTF-8">
<link rel="shortcut icon" href="img/log.png" />
</head>

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
				//echo $user_ID;
				
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
      <a href="PNUMapAR.php">PNU Map</a>
      <a href="aboutTrainAR.php">Aboute Train</a>
	  <a href="menu.php">Rasturant Info</a>
 </div>

<li><a href="HomeAR.php">عربي</a></li>
 
  </li>
</ul>
</nav>
</header>						
		
<body>
<p>Your Favorite Station</p>
<br/>

<div class="Fborder">
<center>


<form method="post" action="favoriteStation.php">
<select name="slc"   >
  <option value="blank">Select Station</option>
<?php
$stations=mysqli_query($conn,"select station_name from station ");
while($rows=mysqli_fetch_array($stations))
	{	?>
					
<option value="<?php echo $rows["station_name"];?>"  ><?php echo $rows["station_name"]; ?></option>

<?php  }  ?>
</select>

<input name="submit" type="submit" value="OK" ></center>


<br/>
  </form>    
				
</div>				<?php 
			
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
  }
  else{
	  
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
                  ?><center><a class="favorite-station" href="showarrival.php?station=<?php echo $row["f_station"];?>"> <?php echo $row["f_station"]; ?> 
				  </a><br/> </center>

				 </body>
				<?php
			 
					 } }
					?> <center><form method="post" action="favoriteStation.php">
				<input type="submit" name="deleteItem" value="Reset" >
				</form></center><?php 
			 
			
			
$conn->close();
}else{ include "header.html";
	?><br/><p>Your Favorite Station</p>
		 <script type="text/javascript"> 
		 alert( "you must sign in!");
		 window.location = "SignIn.php";</script></body>
<br/>
<br/>
<br/>
        <?php } 
include "footer.html";
?>