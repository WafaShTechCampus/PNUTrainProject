<?php include 'headerLogoutAR.php';
?>
<?php
//Step1


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
<html>
<head>
<title>وقت الوصول</title>
<link rel="shortcut icon" href="img/log.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>
<?php
mysql_set_charset('utf8');
 	echo "<div align=center>";
	echo"<br /><table cellpadding='15'cellspacing='0'><br />
	<tr><th><b>الوقت</b></th>
	<th><b>المسار</b></th>
	<th><b>جهة الوصول</b></th></tr>";
	$r=0;
	if($_GET["station"]=="blank"){
		header("Location:ArrivalA.php");
	}
 $query = mysql_query("SELECT * FROM arrivalar where Station_Name='".$_GET["station"] ."'");  
             while(  $row = mysql_fetch_array($query)){
    $r=$row['ID'];
	if($r>=10){
		switch($r){
			case 10:
	$query = mysql_query("SELECT * FROM arrivalar where ID=1");  
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Arrival_TimeB']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_TrainB']."</td>"; 
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
			 echo"</tr>";}
		$query = mysql_query("SELECT * FROM arrivalar where ID=9");   
          while(  $row = mysql_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>"; 
	}break;
			case 11:
			$query = mysql_query("SELECT * FROM arrivalar where ID=9");   
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>"; 
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
    echo"</tr>";
		}
		$query = mysql_query("SELECT * FROM arrivalar where ID=12");   
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>"; 
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
    echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	 echo"</tr>";
		}
		break;
		    case 12:
			$query = mysql_query("SELECT * FROM arrivalar where ID=11");   
             while(  $row = mysql_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
    echo"</tr>";	
	}
		break;
		     case 13:
			 $query = mysql_query("SELECT * FROM arrivalar where ID=14");   
             while(  $row = mysql_fetch_array($query)){
    echo"<tr>";			 
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
		}
		break;	
              case 14:
			 $query = mysql_query("SELECT * FROM arrivalar where ID=5");   
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
		}
              case 14:
			 $query = mysql_query("SELECT * FROM arrivalar where ID=13");   
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
		}
		break;			
	}}
	else{
	$r=$r+1;		
	$query = mysql_query("SELECT * FROM arrivalar where ID='".$r."'");   
             while(  $row = mysql_fetch_array($query)){
	echo"<tr>";
	echo "<td>".$row['Arrival_TimeB']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_TrainB']."</td>";
	echo "<td>".$row['Path_NameB']."</td>";
	echo "<td>".$row['Station_Name']."</td>"; 
    echo"</tr>";	
	} 	
	if($r-1==5){
		 $query = mysql_query("SELECT * FROM arrivalar where ID=14");  
             while(  $row = mysql_fetch_array($query)){
echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_Train']."</td>";
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>"; 
	echo"</tr>";}
	 }
	  if($r-2==0){
				$query = mysql_query("SELECT * FROM arrivalar where ID=10");  
             while(  $row = mysql_fetch_array($query)){
echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";}
			 }
	  else{
				 $r=$r-2;
				$query = mysql_query("SELECT * FROM arrivalar where ID='".$r."'");   
             while(  $row = mysql_fetch_array($query)){
	
	echo"<tr>";
	echo "<td>".$row['Arrival_Time']."</td>";
	echo "<td>".$row['Path_Name']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>";
	echo "<td>".$row['Next_Train']."</td>"; 
	echo "<td>".$row['Path_NameN']."</td>";
	echo "<td>".$row['Station_Name']."</td>";
	echo"</tr>"; 
	}}}
			 }
echo"</table>"."</div>"."<br />";
				
?>
<?php
include "footer.html";
?>