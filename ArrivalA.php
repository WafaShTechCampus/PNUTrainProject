<?php include 'headerLogoutAR.php';?>
<?php
include 'db_conn.php';
$get=mysqli_query($conn,"SELECT Station_Name FROM arrivalar");?>
<html>
<head>
<title>وقت الوصول</title>
<link rel="shortcut icon" href="img/log.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<center><br /><br/>
<form method="get" action="ArrivalA2.php?station=station">
<select name="station"    >
    <option value="blank">اختار محطة</option>
        <?php
            while($row = mysqli_fetch_assoc($get))
            {
            ?>
            <option value = "<?php echo($row['Station_Name'])?>" >
                <?php echo($row['Station_Name']) ?>
            </option>
            <?php
            }               
        ?>
    </select>
	
<input name="submit" type="submit" value="موافق" >
</form>
</body>
</html>
<?php
include 'footer.html';
?>