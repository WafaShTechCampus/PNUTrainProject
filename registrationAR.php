<?php
include "headerAR.html";
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
    <title>إنشاء حساب</title>
 
	<meta charset="UTF-8">
<link rel="shortcut icon" href="img/log.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav>

</head>
<body id="bgraound">
	<div class="container">
	<center>
		<h2>إنشاء حساب</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
			<div class="regisFrm">

			<form action="userAccountAR.php" method="post">
				<input type="text" name="first_name" placeholder="الاسم" required=""><br/>
				
				<input type="email" name="email" placeholder="الإيميل" required=""><br/>
				
				<input type="password" name="password" placeholder="كلمة المرور" required=""><br/>
				
				<input type="password" name="confirm_password" placeholder="التأكد من كلمة المرور" required=""><br/>
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="إنشاء الحساب">
				</div>
			</form>
			</center>
		</div>
	</div>
</body>
</html>
<?php
include "footer.html";
?>