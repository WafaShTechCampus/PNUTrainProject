<?php include "headerLogout.php"; ?>
<?php 

include "db_conn.php";

$options="";

$sql = "SELECT ID ,College_name  FROM college";
$result=mysqli_query($conn,$sql);
if($result==false){
   echo("Error: ".mysqli_error($conn));
  }
  while($r = mysqli_fetch_array($result))
{

	$options = $options. "<option value=" .$r['ID']. " >" .$r['College_name']."</option>";
}

if(isset($_POST['OK'])) {

}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" />
<title>Find My college</title>
<link rel="shortcut icon" href="img/log.png" />
    </head>
	
	<body>
  
<br/>
<p class="size"> Choose the college name</p>
   <center>
        <form action="findmycollegeEn2.php" class="transselect" method="get">
        <select class="two" name="FindMyCollege" id="college" class="transselect" type="text">
		<option value="0">Colleges Name</option>
  	<?php 
								echo $options;
							?>
		
</select>

            <input type="submit" class="transform" name="OK" value="OK"/>
        </form>
	</center>
		<br/>
	<br/>
	<br/>
    </body>
<html>
<?php 

include "footer.html"; ?>