<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>登入</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="uAcc"><br/>
請輸入密碼:<input type="password" name="uPwd"><br/>
<input type="submit">
<input type="reset">
</form>
<?php
require('include.php');
if(isset($_POST["uAcc"])){
	$uAcc=$_POST["uAcc"];
	$uPwd=$_POST["uPwd"];
//新增資料

//include('header.php');


//$add="INSERT INTO user2(name,pwd) VALUES('$uName','$uPwd')";
//mysqli_query($link,$add);
//讀取資料
$read="SELECT * FROM login WHERE account='$uAcc' AND pwd='$uPwd'";
$readresult=mysqli_query($link,$read);

$rows=mysqli_num_rows($readresult);
	
if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["uAcc"]=$uAcc;
	$_SESSION["uPwd"]=$uPwd;

	header('Location:food.php');
}
	
else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="login1.php"');
	//echo "where r u from?";
}
}
?>
<a href="register1.php">前往註冊</a>
</center>
</body>
</html>
