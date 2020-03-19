<?php include "headerLogout.php" ;
 ?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/style.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stations</title>
<link rel="shortcut icon" href="img/log.png" />
</head>
<body>
 <br>
 <br>
 <br>
 <br>
 <center>
<form method="post" action="restaurants.php?station=A2"  >  
<input type="submit" name="A2" value="A2" class="sbmit-station">
</form>
<form method="post" action="restaurants.php?station=A4">  
<input type="submit" name="A4" value="A4" class="sbmit-station" >
</form>
<form method="post" action="restaurants.php?station=A9">  
<input type="submit" name="A9" value="A9"  class="sbmit-station">
</form>
<form method="post" action="restaurants.php?station=A10">  
<input type="submit" name="A10" value="A10"  class="sbmit-station">
</form></center>
</body>
</html>
<?php  
 include "footer.html";               

?>