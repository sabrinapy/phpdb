<?php session_start(); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<br/><br/>
謝�??��??�顧，�??�已?�送到?��?信箱
</center>
</body>
</html> -->
<html>
<head>
</head>
<body>
<?php
// echo "string";
// ini_set('display_errors', 'On');
require("/usr/share/php/libphp-phpmailer/class.phpmailer.php"); //?�入PHPMailer類別 
require("/usr/share/php/libphp-phpmailer/class.smtp.php");

require('include.php');
	$read="SELECT * FROM login  WHERE account='$_SESSION[uAcc]'";//讀?��???
	$readresult = mysqli_query($link, $read);//讀?��???
	$result=mysqli_fetch_array($readresult);

$mail= new PHPMailer(); //建�??�物�?
$mail->IsSMTP();                                // 設�?使用SMTP?��?寄信        
$mail->SMTPAuth = true;                         // 設�?SMTP?�要�?�?
// $mail->SMTPDebug=2; 
$mail->SMTPSecure = "ssl";                      // Gmail?�FMTP主�??�要使?�SSL???   
$mail->Host="smtp.gmail.com";                 // Gmail?�FMTP主�?        
$mail->Port = 465;                              // Gmail?�FMTP主�???ort??65      
$mail->CharSet = "utf-8";                       // 設�??�件編碼   
$mail->Encoding = "base64";
$mail->WordWrap = 50;                           // �?0?��??x��?�斷�?
      
$mail->Username = "";     // 設�?驗�?帳�?(gmail)       
$mail->Password = "";              // 設�?驗�?密碼(gmail)
$mail->From = ""; //設�?寄件?�信�?
$mail->FromName = "測試人員"; //設�?寄件?��???

$mail->IsHTML(true); //設�??�件?�容?�HTML 
$mail->Subject = "PHPMailer 測試信件"; //設�??�件標�? 
$mail->Body = $_SESSION['uAcc']."訂購�?br>".$_SESSION['pro'][1]."?��??�便??<br>".$_SESSION['pro'][2]."?��?骨便??br>".$_SESSION['pro'][3]."?��??�便??<br>?�絡?�話:".$result[4]."<br>Email : ".$result[5] ;//設�??�件?�容 
$mail->AddAddress("", ""); //設�??�件?��E件�??�稱 
$mail->Send();

// if($mail->Send()) {
// echo "Message sent!"; 
// } else { 
// echo "Mailer Error: " . $mail->ErrorInfo; 
 
// } 
// include ("C:\Users\USER\Desktop\PHPMailer-master\class.phpmailer.php");
//  $email = new PHPMailer();
//  $email->From      = 'firefox1937@gmail.com';   ### 你�??��E?��?
//  $email->Username = "firefox1937@gmail.com"; //設�?驗�?帳�? 
//  $email->Password = "765481239"; //設�?驗�?密碼 
//  $email->FromName  = 'kevin';
//  $email->Subject   = 'z';
//  $email->Body      = 'zzz';
//  $email->AddAddress('firefox1937@gmail.com');   ### ?�件?��E?��?
 
// //$email->addAttachment('/path/to/attach_file.pdf')   ### ?�件檔�?.
 
// return $email->Send();
?>
<body/>
<html/>
