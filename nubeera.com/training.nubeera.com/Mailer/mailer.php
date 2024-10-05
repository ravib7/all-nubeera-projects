<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMail/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.office365.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



    class Mail{

        public function registrationMailer($email, $firstName, $verificationCode, $mail){
            $url = 'http://localhost:1042/training.nubeera.com/user/confirmation.php?email='.$email.'&verification_token='.$verificationCode;

            //Recipients
            $mail->setFrom('', 'Verification Email');  
            $mail->addAddress($email, $firstName);     // Add a recipient
            $mail->addAddress($email);               // Name is optional
            $mail->addReplyTo('info@nubeera.com', 'NubeEra');
            // $mail->addCC('cc@example.com');
            //  $mail->addBCC('bcc@example.com');

                // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = '<a href="'.$url.'"><b>Click Here to Verify</b></a> ';
            //$mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="format-detection" content="date=no"/><meta name="format-detection" content="address=no"/><meta name="format-detection" content="telephone=no"/><meta name="x-apple-disable-message-reformatting"/><link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet"/><title>Email Template</title><style type="text/css" media="screen">/* Linked Styles */body{padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none}a{color:#66c7ff; text-decoration:none}p{padding:0 !important; margin:0 !important}img{-ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */}.mcnPreviewText{display: none !important;}/* Mobile styles */@media only screen and (max-device-width: 480px), only screen and (max-width: 480px){.mobile-shell{width: 100% !important; min-width: 100% !important;}.bg{background-size: 100% auto !important; -webkit-background-size: 100% auto !important;}.text-header,.m-center{text-align: center !important;}.center{margin: 0 auto !important;}.container{padding: 0px 10px 10px 10px !important}.td{width: 100% !important; min-width: 100% !important;}.text-nav{line-height: 28px !important;}.p30{padding: 15px !important;}.m-br-15{height: 15px !important;}.p30-15{padding: 30px 15px !important;}.p40{padding: 20px !important;}.m-td,.m-hide{display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important;}.m-block{display: block !important;}.fluid-img img{width: 100% !important; max-width: 100% !important; height: auto !important;}.column,.column-top,.column-empty,.column-empty2,.column-dir-top{float: left !important; width: 100% !important; display: block !important;}.column-empty{padding-bottom: 10px !important;}.column-empty2{padding-bottom: 20px !important;}.content-spacing{width: 15px !important;}}</style></head><body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4"><tr><td align="center" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell"><tr><td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:0px 0px 40px 0px;"><br><br><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td style="padding: 20px 15px;" bgcolor="#009bfe" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://www.nubeera.com/wp-content/uploads/2019/07/cropped-logo-light-1.png" width="20%" height="40%" border="0" alt=""/></td><td class="section-title" style="color:#ffffff; font-family:"Roboto", Arial,sans-serif; font-size:16px; line-height:22px; text-align:center; font-weight:bold; text-transform:uppercase;">Email VErification</td></tr></table></td></tr></table><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td style="padding-bottom: 10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff"><tr><td class="p30-15" style="padding: 30px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th class="column" width="240" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="https://c.aayulogic.com.np/images/pages/icons/email-verification.svg" width="240" height="320" border="0" alt=""/></td></tr></table></th><th class="column-empty" width="50" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th><th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="h2 pb20" style="color:#050505; font-family:"Roboto", Arial,sans-serif; font-size:28px; line-height:34px; text-align:left; padding-bottom:20px;">Hi, '.$firstName.'</td></tr><tr><td class="text pb20" style="color:#666666; font-family:"Roboto", Arial,sans-serif; font-size:16px; line-height:28px; text-align:left; padding-bottom:20px;">We need to verify your email address</td></tr><tr><td align="left"><table border="0" cellspacing="0" cellpadding="0"><tr><td class="text-button" style="background:#4285f4; color:#ffffff; font-family:"Roboto", Arial,sans-serif; font-size:14px; line-height:18px; padding:12px 30px; text-align:center;"><a href="'.$url.'" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Verify</span></a></td></tr></table></td></tr></table></th></tr></table></td></tr></table></td></tr></table> <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td class="p30-15" style="padding: 50px 30px;" bgcolor="#ffffff"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center" style="padding-bottom: 30px;"><table border="0" cellspacing="0" cellpadding="0"><tr><td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://image.flaticon.com/icons/svg/1384/1384053.svg" width="38" height="38" border="0" alt=""/></a></td><td class="img" width="55" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://image.flaticon.com/icons/svg/1384/1384060.svg" width="38" height="38" border="0" alt=""/></a></td><td class="img" width="38" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://image.flaticon.com/icons/svg/1384/1384062.svg" width="38" height="38" border="0" alt=""/></a></td></tr></table></td></tr><tr><td class="text-footer3" style="color:#c0c0c0; font-family:"Roboto", Arial,sans-serif; font-size:12px; line-height:18px; text-align:center;"><a href="#" target="_blank" class="link3-u" style="color:#c0c0c0; text-decoration:underline;"><span class="link3-u" style="color:#c0c0c0; text-decoration:underline;">Unsubscribe</span></a> from this mailing list.</td></tr></table></td></tr></table></td></tr></table></td></tr></table></body></html>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            
            return 'Success';      
        }



    }
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
