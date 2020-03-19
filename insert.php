<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "showimg";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo 'erroe';
}
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<form method="post" action="insert.php">

   				   
							   <input type="text" name="id" >id<br>
							   <input type="text" name="name" >Name<br>
							   <input type="text" name="namear" >NameAR<br>
							   <input type="text" name="img" >img<br>

  
<input type="submit" name="e-submit" value="Submit" required ><br/> 

</form>




<?php



 if(isset($_POST['e-submit'])){
$name=$_POST['name'];
$id = $_POST['id'];
$nameAR=$_POST['namear'];
$img=$_POST['img'];

$sql = mysqli_query($conn,"INSERT INTO a4 (ID,Name,NameAR,img) VALUES ('$id','$name','$nameAR','$img')"); 
}
?>