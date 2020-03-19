<?php
if(!empty($_POST['latitude']) && !empty($_POST['longitude']))
{


    
 $latitude= $_POST['latitude'];
 $longitude= $_POST['longitude'];
 $location =  '';
 
//6371 Km, 3959 Mean raidus of the earth in Mill

//r * acos[sin(lat1) * sin(lat2) + cos(lat1) * cos(lat2) * cos(lon2 - lon1)]
//dist_Sphere = r_earth * acos ( sin (lat1) * sin (lat2) + cos(lat1)*cos(lat2)*cos(lon 2 - lon 1)
include 'dbconn.php'; 

//acos(sin(:lat)*sin(radians(Lat)) + cos(:lat)*cos(radians(Lat))*cos(radians(Lon)-:lon)) * :R As D
$stmt = $db->prepare("SELECT station_name, ( 3959  * acos( sin('$latitude')* sin(lat)  
						+ cos('$latitude')*cos(lat) *cos(lng - '$longitude')  )) AS distance FROM station  order by  distance LIMIT 2  ");
						
				
	
	$stmt->execute(array()) ;



	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
											{	
     $location= "<p class='bg-primary'>". $row["station_name"] ."</p>";
    //Print address 
    echo $location;
	}
	
}
?>