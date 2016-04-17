<html>
<body>
<center>
<?php
$no=$_GET["no"];
include('include.php');

$read="SELECT * FROM cart WHERE cart_num=".$no;
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='updateresult.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";

echo "帳戶:<input type='text' name='account' value='".$result[5]."'><br/>";
echo "訂單數量:<input type='text' name='amount' value='".$result[3]."'><br/>";
echo "訂單價格:<input type='text' name='price' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

?>
</center>
</body>
</html>