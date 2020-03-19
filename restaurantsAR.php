<?php include "headerLogoutAR.php" ;
?><html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>المطاعم</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/log.png" />
</head>


<table width="100%" align="center" class="empty"><tr><td><?php 
 $connect = mysqli_connect("localhost", "root", "", "arriva"); 
 if($_GET["station"]=="A2")
$query = "SELECT * FROM a2 ORDER BY ID ASC ";  
else if($_GET["station"]=="A4")
$query = "SELECT * FROM a4 ORDER BY ID ASC ";  
else if($_GET["station"]=="A9")
$query = "SELECT * FROM a9 ORDER BY ID ASC ";  
else if($_GET["station"]=="A10")
$query = "SELECT * FROM a10 ORDER BY ID ASC ";  
$result = mysqli_query($connect, $query);  

  while($row = mysqli_fetch_array($result))  
 {   ?>


<body>

<form method="post" action="ShowimgAR.php?id=<?php echo $row["ID"]; ?>">  
<table  class="show" align="right" >    
<tr><td>
<a href='ShowimgAR.php?id=<?php echo $row["ID"]; ?>'> <img src="<?php echo $row["logo"]; ?>" alt="<?php echo $row["NameAR"]; ?>" height="164" width="260" border="0"/>
</a>
<h4 ><?php echo $row["NameAR"]; ?></h4> 

 </td></tr>

</form>
</table>

<?php  
                     }  
				  ?>
</td></tr> </table>

 </body>
</html><?php 
  include "footer.html";            

?>