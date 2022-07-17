<?php
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

ob_start();
session_start();

if($_REQUEST['act']=='contact_act')

{
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

if(isset($_REQUEST['your_phone']) && is_numeric($_REQUEST['your_phone']) && preg_match('/^[a-z0-9 .,?\-]+$/i', $_REQUEST['your_message']) && preg_match('/^[a-z0-9 .\-]+$/i', $_REQUEST['your_fname'])  && preg_match($regex, $_REQUEST['your_email']))

{
$your_fname=$_REQUEST['your_fname'];
$your_email=$_REQUEST['your_email'];
$your_phone=$_REQUEST['your_phone'];
$course=$_REQUEST['course'];
$message1234=$_REQUEST['your_message'];

$cur_date=date('Y-m-d H:i:s');

$to="vediclife1008@gmail.com,iyershakti1@gmail.com";



		$subject="Vedic Life(Meditation Courses)";
		
		$message="<html>
<head>
<title>vedic-life.org</title>
</head>

<body>
<table width='100%' cellpadding='0' cellspacing='0' border='0' style='line-height:25px;'>
  <tr>
    <td width='28%' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC;'>Name: </td>
    <td width='72%' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC;'>$your_fname</td>
  </tr>
  <tr>
    <td width='28%' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC;'>Email Id: </td>
    <td width='72%' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC;'> $your_email</td>
  </tr>
  <tr>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC;'>Phone No: </td>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC;'> $your_phone</td>
  </tr>
  <tr>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC;'>Courses: </td>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC;'> $course</td>
  </tr>
  
  <tr>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC; border-right:1px solid #CCCCCC;'>Message: </td>
    <td style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding-left:10px;border-bottom:1px solid #CCCCCC;'> $message1234</td>
  </tr>
</table>
</body>
</html>";

$from="noreply@vedic-life.org";
$headers = "From:".$your_fname." <".$from.">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Return-Path: <$from>\r\n";
$headers .= "Content-Type: text/html;\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

		// Additional headers
		// Mail it

//echo $message;

mail($to,$subject,$message, $headers);

}
header("location:https://www.learnm.in/meditation-courses/thank-you.html");

}

?>