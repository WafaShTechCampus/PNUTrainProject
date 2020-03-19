<?php
include "headerLogout.php"; 
include "db_conn.php";?>
<!DOCTYPE html>
<html> 
<head>
<title>Train Map</title>
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
<h2 > You can  move the mouse pointer over any station to see more info.</h2>
</div>



<div id ="map"><!--We can get Train info from DB inside PHP tag-->
<!-------------------------A1 Station--------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A10'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A1-1"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A2'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A1-2" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>


<!--------------------------A2 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A1'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A2-1"data-toggle="tooltip" title= "<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"" ></div>

<?php 
$user_result2 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name FROM arrivale where Station_name='A3'");  
$row = mysqli_fetch_array($user_result2); ?>
<div id ="A2-2"data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>" ></div>

<!--------------------------A3 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A2'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A3-1" data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A4'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A3-2" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>" ></div>

<!--------------------------A4 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A3'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A4-1"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A5'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A4-2"data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>

<!--------------------------A5 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A4'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A5-1"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A6'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A5-2"data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>

<!--------------------------A6 Station-------------------------->

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A7'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A6-1" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A5'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A6-2" data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>


<!--------------------------A7 Station-------------------------->

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A8'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A7-1" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A6'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A7-2" data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>


<!--------------------------A8 Station-------------------------->

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A9'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A8-1"data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A7'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A8-2"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>


<!--------------------------A9 Station-------------------------->

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A10'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A9-1" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A8'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A9-2"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>


<!--------------------------A10 Station-------------------------->

<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_NameB,Arrival_TimeB,Station_name  FROM arrivale where Station_name='A1'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="A10-1" data-toggle="tooltip" title="<?php echo $row['Path_NameB']." ,NEXT: ".$row['Arrival_TimeB']." ".$row['Station_name'];?>"></div>
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='A9'");  
$row = mysqli_fetch_array($user_result1);?> 

<div id ="A10-2" data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>


<!--------------------------F1 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='F2'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="F1"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>

<!--------------------------F2 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='F1'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="F2"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>

<!--------------------------S1 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='S2'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="S1" data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>" ></div>

<!--------------------------S2 Station-------------------------->
<?php  
$user_result1 = mysqli_query($conn, "SELECT Path_Name,Arrival_Time,Station_name FROM arrivale where Station_name='S1'");  
$row = mysqli_fetch_array($user_result1);?> 
<div id ="S2"data-toggle="tooltip" title="<?php echo $row['Path_Name']." ,NEXT: ".$row['Arrival_Time']." ".$row['Station_name'];?>"></div>
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