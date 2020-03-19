<?php
include "Header.html";
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8">
 <title>Create Account </title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/log.png" />
</head>

   
	
			<body id="bgraound">
		<body>
	<div class="container">
	<center>
		<h2>Create a New Account</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post" >
				<input type="text" name="first_name" placeholder="NAME" required=""><br/>
				<input type="email" name="email" placeholder="EMAIL" required=""><br/>
				<input type="password" name="password" placeholder="PASSWORD" required=""><br/>
				<input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required=""><br/>
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
				</div>
				
			</form>
				</center>
			
		</div>
	</div>
	
</body>
</html>
<?php include "footer.html";
 ?>




   

