<?php include "headerLogoutAR.php"; ?>

<html>
<head>
		<meta charset="UTF-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>أين كليتي</title>
<link rel="shortcut icon" href="img/log.png" />
    </head>
<?php 

include "db_conn.php";

$options="";
mysqli_set_charset($conn,'utf8');
$sql = "SELECT ID ,College_name  FROM collegear";
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

	
	<body>
  
<br/>
<p class="size">  :اختر اسم الكلية</p>
   <center>
        <form action="findmycollege2AR.php" class="transselect" method="get">
        <select class="two" name="FindMyCollege" id="college" class="transselect" type="text">
		<option value="0">أسماء الكليات</option>
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
<?php include "footer.html"; ?>