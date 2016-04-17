<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>管理者登入</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
<input type="submit">
<input type="reset">
<?php
require('include.php');
if(isset($_POST["uAcc"])){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];
$read="SELECT * FROM manlogin WHERE man_account='$uAcc' AND man_pwd='$uPwd'";

$readresult=mysqli_query($link,$read);

$rows=mysqli_num_rows($readresult);
	
if($rows){
	
	header('Location:updateresult.php');
}else{
	echo "<br/>";
	echo "fail";
}
}
?>
</form>
</center>
</body>
</html>