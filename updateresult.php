<html>
<body>
<center>
<?php
$no=$_POST["no"];
$amount=$_POST["amount"];
$price=$_POST["price"];
include('include.php');

$update="UPDATE cart SET cart_amount='$amount',cart_price='$price' WHERE cart_num=".$no;
mysqli_query($link,$update);

//讀取資料
$read="SELECT * FROM cart";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳戶</td><td>訂單編號</td><td>訂購數量</td><td>此訂單價錢</td><td>更新資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[5]."</td>";
	echo "<td>".$result[0]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	echo "<td><a href='update.php?no=".$result[0]."'>更新資料</a></td>";
	
	echo "</tr>";
}
	echo "</table>";

?>
</center>
</body>
</html>