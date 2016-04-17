<?php session_start(); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<br/><br/>
шмЭш??ич??ащбзя╝Мш??ох╖▓?│щАБхИ░?ич?ф┐бчо▒
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
require("/usr/share/php/libphp-phpmailer/class.phpmailer.php"); //?пхЕеPHPMailerщбЮхИе 
require("/usr/share/php/libphp-phpmailer/class.smtp.php");

require('include.php');
	$read="SELECT * FROM login  WHERE account='$_SESSION[uAcc]'";//шоА?Цш???
	$readresult = mysqli_query($link, $read);//шоА?║ш???
	$result=mysqli_fetch_array($readresult);

$mail= new PHPMailer(); //х╗║ч??░чЙйф╗?
$mail->IsSMTP();                                // шинх?ф╜┐чФиSMTP?╣х?хпДф┐б        
$mail->SMTPAuth = true;                         // шинх?SMTP?АшжБщ?шн?
// $mail->SMTPDebug=2; 
$mail->SMTPSecure = "ssl";                      // Gmail?вFMTPф╕╗ц??АшжБф╜┐?иSSL???   
$mail->Host="smtp.gmail.com";                 // Gmail?вFMTPф╕╗ц?        
$mail->Port = 465;                              // Gmail?вFMTPф╕╗ц???ort??65      
$mail->CharSet = "utf-8";                       // шинх??╡ф╗╢ч╖ичв╝   
$mail->Encoding = "base64";
$mail->WordWrap = 50;                           // цп?0?Лх??xЗк?ХцЦ╖шб?
      
$mail->Username = "";     // шинх?щйЧш?х╕│ш?(gmail)       
$mail->Password = "";              // шинх?щйЧш?хпЖчв╝(gmail)
$mail->From = ""; //шинх?хпДф╗╢?Еф┐бчо?
$mail->FromName = "ц╕мшйжф║║хУб"; //шинх?хпДф╗╢?Ех???

$mail->IsHTML(true); //шинх??╡ф╗╢?зхо╣?║HTML 
$mail->Subject = "PHPMailer ц╕мшйжф┐бф╗╢"; //шинх??╡ф╗╢циЩщ? 
$mail->Body = $_SESSION['uAcc']."шиВш│╝ф║?br>".$_SESSION['pro'][1]."?Лщ??┐ф╛┐??<br>".$_SESSION['pro'][2]."?Лц?щкиф╛┐??br>".$_SESSION['pro'][3]."?Лщ??Тф╛┐??<br>?пч╡б?╗шй▒:".$result[4]."<br>Email : ".$result[5] ;//шинх??╡ф╗╢?зхо╣ 
$mail->AddAddress("", ""); //шинх??╢ф╗╢?ЕщEф╗╢х??Нчи▒ 
$mail->Send();

// if($mail->Send()) {
// echo "Message sent!"; 
// } else { 
// echo "Mailer Error: " . $mail->ErrorInfo; 
 
// } 
// include ("C:\Users\USER\Desktop\PHPMailer-master\class.phpmailer.php");
//  $email = new PHPMailer();
//  $email->From      = 'firefox1937@gmail.com';   ### ф╜ач??╗щE?░х?
//  $email->Username = "firefox1937@gmail.com"; //шинх?щйЧш?х╕│ш? 
//  $email->Password = "765481239"; //шинх?щйЧш?хпЖчв╝ 
//  $email->FromName  = 'kevin';
//  $email->Subject   = 'z';
//  $email->Body      = 'zzz';
//  $email->AddAddress('firefox1937@gmail.com');   ### ?╢ф╗╢?╗щE?░х?
 
// //$email->addAttachment('/path/to/attach_file.pdf')   ### ?Дф╗╢цкФц?.
 
// return $email->Send();
?>
<body/>
<html/>
