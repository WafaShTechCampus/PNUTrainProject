 <?php include 'headerLogout.php';
include 'db_conn.php';
?>
<html>
<head>
<title>Arrival Time</title>
<link rel="shortcut icon" href="img/log.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>
<?php
 	echo "<div align=center>";
	echo"<br /><table cellpadding='15'cellspacing='0'><br />
	<tr><th><b>DESTINATION</b></th>
	<th><b>LINE</b></th>
	<th><b>TIME</b></th></tr>";
	$r=0;
	if($_GET["station"]=="blank"){
		header("Location:Arrival1.php");
	}
 $query = mysqli_query($conn, "SELECT * FROM arrivalE where Station_Name='".$_GET["station"] ."'");  
             while(  $row = mysqli_fetch_array($query)){
    $r=$row['ID'];
	if($r>=10){
		switch($r){
			case 10:
	$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=1");  
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Arrival_TimeB']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Next_TrainB']."</td>"; 
			 echo"</tr>";}
		$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=9");   
          while(  $row = mysqli_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo"</tr>"; 
	}break;
			case 11:
			$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=9");   
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>"; 
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>";
    echo"</tr>";
		}
		$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=12");   
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>"; 
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
    echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>";
	 echo"</tr>";
		}
		break;
		    case 12:
			$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=11");   
             while(  $row = mysqli_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>";
    echo"</tr>";	
	}
		break;
		     case 13:
			 $query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=14");   
             while(  $row = mysqli_fetch_array($query)){
    echo"<tr>";			 
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>";
	echo"</tr>";
		}
		break;	
              case 14:
			 $query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=5");   
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
		}
              case 14:
			 $query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=13");   
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>";
	echo"</tr>";
		}
		break;			
	}}
	else{
	$r=$r+1;		
	$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID='".$r."'");   
             while(  $row = mysqli_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Arrival_TimeB']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Next_TrainB']."</td>"; 
    echo"</tr>";	
	} 	
	if($r-1==5){
		 $query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=14");  
             while(  $row = mysqli_fetch_array($query)){
echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo"</tr>";}
	 }
	  if($r-2==0){
				$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID=10");  
             while(  $row = mysqli_fetch_array($query)){
echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo"</tr>";}
			 }
	  else{
				 $r=$r-2;
				$query = mysqli_query($conn, "SELECT * FROM arrivalE where ID='".$r."'");   
             while(  $row = mysqli_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo"</tr>";
	echo "<td>".$row['Station_Name']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo"</tr>"; 
	}}}
			 }
echo"</table>"."</div>"."<br />";
					 
$conn->close();
?>
<?php
include "footer.html";
?>