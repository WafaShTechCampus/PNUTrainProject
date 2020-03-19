<?php
include "headerLogoutAR.php"; 
$user_name ="root";
$password = "";
$server="127.0.0.1";


$db= mysql_connect($server,$user_name,$password);
if (!$db) {
die("Database connection failed miserably: " . mysql_error());
}

//Step2
$db_select = mysql_select_db("arriva",$db);
if (!$db_select) {
die("Database selection also failed miserably: " . mysql_error());
}


?>
<!DOCTYPE html>
<html> 
<head>
<title>خريطة القطار</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/log.png" />
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8">
<link rel="stylesheet" href="style/mapStyle.css">
<link rel="stylesheet" href="style/w3.css" >
<script src="interactive.js"></script>
<script src="jQuery.js"></script>
<script src="tooltip.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script>

</head>
<body>
<br/>
<div align=right>
 <form name="clock" onSubmit="0">
    <INPUT TYPE="text" NAME="face" SIZE=11 READONLY VALUE ="....Initializing....">
</form>
<center>
<h4>.يمكنك تحريك مؤشر الماوس على أي محطة لعرض معلومات أكثر<h4>
</div>


<div id ="map"><!--We can get Train info from DB inside PHP tag-->
<!-------------------------A1 Station--------------------------->
<?php  
mysql_set_charset('utf8');
$result = mysql_query("SELECT * FROM arrivalar", $db);
	 $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A10'");
      $row=mysql_fetch_array($query);?> 
<div id ="A1-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>

<?php  

	$query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A2'");
      $row=mysql_fetch_array($query);?> 
<div id ="A1-2" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>


<!-------------------------A2 Station--------------------------->
<?php  

	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A1'");
      $row=mysql_fetch_array($query);?> 
<div id ="A2-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>

<?php  
	$query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A3'");
      $row=mysql_fetch_array($query);?>
<div id ="A2-2"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>



<!-------------------------A3 Station--------------------------->
<?php 
	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A2'");
      $row=mysql_fetch_array($query);?>
<div id ="A3-1" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>
<?php  

	$query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A4'");
      $row=mysql_fetch_array($query);?>
<div id ="A3-2" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>



<!-------------------------A4 Station--------------------------->
<?php  

	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A3'");
      $row=mysql_fetch_array($query);?>
<div id ="A4-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>
	<?PHP $query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A5'");
      $row=mysql_fetch_array($query);?> 
<div id ="A4-2"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>



<!-------------------------A5 Station--------------------------->
<?php  

	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A4'");
      $row=mysql_fetch_array($query);?>
<div id ="A5-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>
	<?PHP $query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A6'");
      $row=mysql_fetch_array($query);?> 
<div id ="A5-2"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>



<!-------------------------A6 Station--------------------------->
<?PHP $query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A7'");
      $row=mysql_fetch_array($query);?> 
<div id ="A6-1" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>
	
<?php  
	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A5'");
      $row=mysql_fetch_array($query);?>
<div id ="A6-2" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>



<!-------------------------A7 Station--------------------------->
<?PHP $query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A8'");
      $row=mysql_fetch_array($query);?> 
<div id ="A7-1" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>

<?php  
	$query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A6' ");
      $row=mysql_fetch_array($query);?>	
<div id ="A7-2" data-toggle="tooltip" title="<?php echo  $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>



<!-------------------------A8 Station--------------------------->
<?php  
 $query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A9'");
      $row=mysql_fetch_array($query);?> 
<div id ="A8-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>
	<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A7'");
      $row=mysql_fetch_array($query);?>
<div id ="A8-2"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>



<!-------------------------A9 Station--------------------------->
<?php  

	$query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A10'");
      $row=mysql_fetch_array($query);?>
	  
<div id ="A9-1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>
	<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A8'");
      $row=mysql_fetch_array($query);?> 
<div id ="A9-2" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>



<!-------------------------A10 Station--------------------------->
<?php  

	$query=mysql_query("SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivalar where Station_name='A1'");
      $row=mysql_fetch_array($query);?>
	  
<div id ="A10-1" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_TimeB']." ".$row['Path_NameB'];?>" ></div>
	<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name='A9'");
      $row=mysql_fetch_array($query);?> 
<div id ="A10-2" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>


<!-------------------------F1 Station--------------------------->
	<?PHP $query=mysql_query("SELECT Path_NameN,Next_Train,Station_name FROM arrivalar where Station_name = 'A9' OR Station_name = 'F2'");
      $row=mysql_fetch_array($query);?> 
<div id ="F1"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Next_Train']." ".$row['Path_NameN'];?>" ></div>


<!-------------------------F2 Station--------------------------->

	<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name = 'F1'");
      $row=mysql_fetch_array($query);?> 
<div id ="F2"data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>


<!-------------------------S1 Station--------------------------->

<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name = 'S2'");
      $row=mysql_fetch_array($query);?> 
<div id ="S1" data-toggle="tooltip" title="<?php echo $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>" ></div>


<!-------------------------S2 Station--------------------------->

<?PHP $query=mysql_query("SELECT Path_Name,Arrival_Time,Station_name FROM arrivalar where Station_name = 'S1' OR Station_name ='A5'");
      $row=mysql_fetch_array($query);?> 
<div id ="S2"data-toggle="tooltip" title="<?php echo  $row['Station_name']." التالي: ".$row['Arrival_Time']." ".$row['Path_Name'];?>"></div>
</div>
<script>
showtime();
myfun();
</script>
</center>
<br/>
<br/>
<br/>
<br/>
</body>
</html>

<?php
 include "footer.html"; ?>