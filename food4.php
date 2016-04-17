<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<form action="food5.php" method="post">
<br/><br/>
<?php
require('include.php');
$pro1=$_POST["pro1"];
$_SESSION['pro'][1]=$pro1;
$pro2=$_POST["pro2"];
$_SESSION['pro'][2]=$pro2;
$pro3=$_POST["pro3"];
$_SESSION['pro'][3]=$pro3;
$sum1=$pro1*75;
$sum2=$pro2*75;
$sum3=$pro3*60;
$sum4=$sum1+$sum2+$sum3;
$sacc=$_SESSION["uAcc"];

$add1="INSERT INTO cart(prod_num,cart_amount,cart_price,cart_account,cart_check)VALUES (1,'$pro1','$sum1','$sacc',0)";
$add2="INSERT INTO cart(prod_num,cart_amount,cart_price,cart_account,cart_check)VALUES (2,'$pro2','$sum2','$sacc',0)";
$add3="INSERT INTO cart(prod_num,cart_amount,cart_price,cart_account,cart_check)VALUES (3,'$pro3','$sum3','$sacc',0)";
$add4="INSERT INTO record(rec_total,rec_account)VALUES ('$sum4','$sacc')";
// $total="INSERT INTO record(rec_num,cart_amount,cart_price)VALUES ('car','$pro3','$sum3')";
// $addacc="INSERT INTO cart(username)VALUES ('$sacc')";
//$add4="INSERT INTO cart(cart_price)VALUES ('$sum1')";
//$add5="INSERT INTO cart(cart_price)VALUES ('$sum2')";
//$add6="INSERT INTO cart(cart_price)VALUES ('$sum3')";
mysqli_query($link,$add1);
mysqli_query($link,$add2);
mysqli_query($link,$add3);
mysqli_query($link,$add4);
echo "您買了".$pro1."個雞腿便當，共".$sum1."元";
echo "<br>";
echo "您買了".$pro2."個排骨便當，共".$sum2."元";
echo "<br>";
echo "您買了".$pro3."個雞排便當，共".$sum3."元";
echo "<br>";
echo "親愛的".$sacc."您好，您這筆訂單總共要".$sum4."元";
echo "<br>";
// mysqli_query($link,$addacc);
//mysqli_query($link,$add4);
//mysqli_query($link,$add5);
//mysqli_query($link,$add6);
// $read="SELECT * FROM cart WHERE username='$sacc'";
// while($readresult = mysqli_query($link, $read)){

// $read1="SELECT * FROM product WHERE prod_price";//讀取資料

// $readresult1=mysqli_query($link, $read1);

// while($result=mysqli_fetch_array($readresult)){

// echo "買了".$result[0]. "個雞腿便當, 共".$result[0]*$result1[0]."元";
// print_r($readresult);
// echo "<br>";


// }


// echo "買了".$readresult[0]. "個雞腿便當, 共".$readresult[0]*$readresult1[0]."元";
// echo "<br>";
// echo "買了".$pro2. "個雞腿便當, 共".$sum2."元";
// echo "<br>";
// echo "買了".$pro3. "個雞腿便當, 共".$sum3."元";
// echo "<br>";

// }
?>
<input type="submit" value="next">
</form>

<a href="food3.php">更改訂單</a>

</center>
</body>
</html>