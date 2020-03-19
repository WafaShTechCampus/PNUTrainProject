<?php include "headerLogout.php" ;
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Restaurants</title>
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

<style>.show {
width:15%;
height:300px;
background-color:white;
  
border:5px solid #4F3A4B;
border-radius: 10px 0;
margin:0 auto;
display:inline-block;
margin-top:5%;
margin-left:5%;
margin-right:5%;

}</style>
<body>

<form method="post" action="Showimg.php?id=<?php echo $row["ID"]; ?>">  
<table align="left" class="show" id="rstMenu" >    
<tr><td>
<a href='Showimg.php?id=<?php echo $row["ID"]; ?>'> <img src="<?php echo $row["logo"]; ?>" alt="<?php echo $row["Name"]; ?>" height="164" width="260" border="0"/>
</a>
<h4 ><?php echo $row["Name"]; ?></h4> 

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