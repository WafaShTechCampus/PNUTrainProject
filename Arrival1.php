<?php include 'headerLogout.php';?>
<?php
include 'db_conn.php';
$get=mysqli_query($conn,"SELECT Station_Name FROM arrivalE");?>
<html>
<head>
<title>Arrival Time</title>
<link rel="shortcut icon" href="img/log.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<center><br /><br/>
<form method="get" action="Arrival2.php?station=station">
<select name="station"    >
    <option value="blank">Select Station</option>
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
	
<input name="submit" type="submit" value="OK" >
</form>
</body>
</html>
<?php
include 'footer.html';
?>