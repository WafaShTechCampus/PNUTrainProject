<?php include "headerLogout.php"?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nearest Station</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/log.png" />
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

    <!-- need for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- required for bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- custom for all -->
    <script src="js/custom.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<style>#loader {
  position: absolute;
  left: 50%;
  top: 76%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -55px 0 0 -55px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #4F3A4B;
  width: 90px;
  height: 90px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}</style>
 
<div class="loader"></div>
 <script type="text/javascript">

 //****************************

 $(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);

    } else { 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position) {
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;

	$("#location").html(''); 

    $("#location").html('<br><p>Please wait for response.............</p> ');
	$.ajax({
		type:'POST',
		url:'getnearest.php',
		data:'latitude='+latitude+'&longitude='+longitude,
		success:function(msg){
		
            if(msg){
               $("#location").html(msg);

            }else{
                $("#location").html('Not Available');
            }
		}
	});
	
}

		   		
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
} 
function myFunction() {
	myVar = setTimeout(showPage, 4000);}

</script>
<style type="text/css">
  .center-block {
    width:30%;
    padding:10px;
    background-color:#eceadc;
    color:#ec8007
    }
	.nearestStation{
		
		width:30%;
		height:40px;

	}
	
	
</style>


</head>

<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>





<p style="margin-top:50px;">Nearest Station to You</p>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div id='preview'></div>
 <form  id="form1" action="" method="post">
<div class="text-center">

   <div class="container">

      <center>
            <div class="nearestStation" >
 
          <span id="location" ></span>

            </div>
			</div>
           
</center>
  
    </div>
   </div>

  
</form>

</body>
</html>
<?php include "footer.html"?>