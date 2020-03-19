<?php include"headerLogout.php"; ?>
<?php include "db_conn.php"; ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Find My College</title>
<link rel="shortcut icon" href="img/log.png" />
 <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
	<?php 

if($_GET['FindMyCollege']==0){

	header("Location: FindMyCollegeEN.php");
}	

$station="";
   $Nstation="";
   $nn=" ";
  

$sql = "SELECT ID ,Station_name ,NeStation FROM college WHERE ID=".$_GET['FindMyCollege']."";
$results = mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($results)){
   $ef=$row['ID'];
   if( $ef =='11'){
    $station= "<p>".$row['Station_name']." and A7 the closest  </p>";
   $Nstation="<p>".$row['NeStation']." </p>";
   $nn="<p> A4 </p>";
   break;
   }
   $station= "<p>".$row['Station_name']." the closest </p>";
   $Nstation="<p>".$row['NeStation']." </p>";

}



?>

<br/>
<p class="size" style="color:#4F3A4B;" >The nearest station of this college is: </p>
<?php echo  $station ?>
<?php echo $Nstation ?>
<?php echo $nn ?>

<br/>
<br/>
<br/>


</body>
</html>
<?php include "footer.html";?>