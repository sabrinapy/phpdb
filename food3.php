<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
開始訂餐囉<br/>
<form action="food4.php" method="post">
<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
session_start();

require('include.php');
	$read="SELECT * FROM product";//讀取資料
	mysqli_set_charset($link,"utf8");
	$readresult = mysqli_query($link, $read);//讀出資料
	echo "<table border='1'>";
	echo "<tr><td>便當</td><td>單價</td></tr>";
	//$i=0;
	//$price[0]=0;
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	//echo $result[1];
	echo "<br>";
	echo "<td>".$result[1]."</td><td>".$result[2]."</td>";
	//$_SESSION['price']=$result[2];
	//$i++;
	//echo "<td><a href='update.php?no=".$result[0]."'>更新資料</a></td>";
	//echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
	echo "</tr>";
	}
	echo "</table>";

?>
請輸入雞腿便當數量:<input type="number" name="pro1" min="0"></br>
請輸入排骨便當數量:<input type="number" name="pro2" min="0"></br>
請輸入雞排便當數量:<input type="number" name="pro3" min="0"></br>

<input type="submit" value="next">


</form>

</center>
</body>
</html>