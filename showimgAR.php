<?php include "headerLogoutAR.php" ;?>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>القائمة</title>
<link rel="shortcut icon" href="img/log.png" />
</head>
<body>
<center>
<?php
 $connect = mysqli_connect("localhost", "root", "", "arriva"); 

$query = "SELECT img FROM img  where ID='".$_GET["id"] ."'";  

$result = mysqli_query($connect, $query);  

  while($row = mysqli_fetch_array($result))  
 {   ?>

 <img src="<?php echo $row["img"]; ?> " class="pic"/> <?php  
  } ?>
<br />
<a href="menuAR.php" >عودة</a>
</center>			  
</body>
</html>
<?php  
                  
               
   include "footer.html";            

?>