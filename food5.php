<?php session_start(); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<br/><br/>
謝謝您的惠顧，訂單已傳送到您的信箱
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
require("/usr/share/php/libphp-phpmailer/class.phpmailer.php"); //匯入PHPMailer類別 
require("/usr/share/php/libphp-phpmailer/class.smtp.php");

require('include.php');
	$read="SELECT * FROM login  WHERE account='$_SESSION[uAcc]'";//讀取資料
	$readresult = mysqli_query($link, $read);//讀出資料
	$result=mysqli_fetch_array($readresult);

$mail= new PHPMailer(); //建立新物件
$mail->IsSMTP();                                // 設定使用SMTP方式寄信        
$mail->SMTPAuth = true;                         // 設定SMTP需要驗證
// $mail->SMTPDebug=2; 
$mail->SMTPSecure = "ssl";                      // Gmail的SMTP主機需要使用SSL連線   
$mail->Host="smtp.gmail.com";                 // Gmail的SMTP主機        
$mail->Port = 465;                              // Gmail的SMTP主機的port為465      
$mail->CharSet = "utf-8";                       // 設定郵件編碼   
$mail->Encoding = "base64";
$mail->WordWrap = 50;                           // 每50個字元自動斷行
      
$mail->Username = "firefox1937@gmail.com";     // 設定驗證帳號        
$mail->Password = "765481239";              // 設定驗證密碼  
$mail->From = "firefox1937@gmail.com"; //設定寄件者信箱 
$mail->FromName = "測試人員"; //設定寄件者姓名

$mail->IsHTML(true); //設定郵件內容為HTML 
$mail->Subject = "PHPMailer 測試信件"; //設定郵件標題 
$mail->Body = $_SESSION['uAcc']."訂購了<br>".$_SESSION['pro'][1]."個雞腿便當 <br>".$_SESSION['pro'][2]."個排骨便當<br>".$_SESSION['pro'][3]."個雞排便當 <br>聯絡電話:".$result[4]."<br>Email : ".$result[5] ;//設定郵件內容 
$mail->AddAddress("firefox1937@gmail.com", "test"); //設定收件者郵件及名稱 
$mail->Send();

// if($mail->Send()) {
// echo "Message sent!"; 
// } else { 
// echo "Mailer Error: " . $mail->ErrorInfo; 
 
// } 
// include ("C:\Users\USER\Desktop\PHPMailer-master\class.phpmailer.php");
//  $email = new PHPMailer();
//  $email->From      = 'firefox1937@gmail.com';   ### 你的電郵地址
//  $email->Username = "firefox1937@gmail.com"; //設定驗證帳號 
//  $email->Password = "765481239"; //設定驗證密碼 
//  $email->FromName  = 'kevin';
//  $email->Subject   = 'z';
//  $email->Body      = 'zzz';
//  $email->AddAddress('firefox1937@gmail.com');   ### 收件電郵地址
 
// //$email->addAttachment('/path/to/attach_file.pdf')   ### 附件檔案.
 
// return $email->Send();
?>
<body/>
<html/>
