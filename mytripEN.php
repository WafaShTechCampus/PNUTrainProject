<?php include 'headerLogout.php';
include 'db_conn.php'; 
?>

<html>
<head>
<meta charset="utf-8">
<title>My Trip</title>
<link rel="shortcut icon" href="img/log.png" />
<style>
#search {
 background-image: url('img/searchicon.png');
 background-position: 6px 10px; 
  background-size: 20px 20px;
background-repeat: no-repeat;

}</style>
</head>

<body>
<center>
   <p>My Trip</P> <br>
   
<form method="post" action="mytripEN-2.php">
 <label>Departure Station</label><br><br>
  <select name="departure">
  					
<option value="0">Stations</option>  
<?php
$stations=mysqli_query($conn,"select station_id,station_name from station ");
while($rows=mysqli_fetch_array($stations))
	{	?>
					
<option value="<?php echo $rows["station_id"]; ?>"  ><?php echo $rows["station_name"]; ?></option>

<?php  }  ?>
 </select><br><br>
     
<label>Arrival Station </label><br><br>
		 
 <select name="arrival">
<option value="0">Stations</option> 	        
<?php 

$stations=mysqli_query($conn,"select station_id,station_name from station ");
while($rows=mysqli_fetch_array($stations)){
?>
				
<option value="<?php echo $rows["station_id"]; ?>"><?php echo $rows["station_name"]; ?></option>

<?php }  ?>
</select><br><br>
  <input type="submit" id="search" value="  Search"/>

</form>
</br>
</center>
</body>
</html>
<?php 
include 'footer.html';
?>