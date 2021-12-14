<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dzharuzov@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '$dk820&123'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('dzharuzov@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('gomudusu@p33.org');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Отзыв с сайта';
$mail->Body    = '
<table border="1">
<tr>
<td>Имя:    </td> 
<td>'.$name.'</td> 
</tr>
<tr>
<td>E-mail:    </td> 
<td>'.$email.'</td> 
</tr>
<tr>
<td>Отзыв:    </td> 
<td>'.$co.'</td> 
</tr>
</table>
';
$mail->AltBody = '';

if(!$mail->send()) {
    header('location: ../../error.html');
} else {
    header('location: ../../ty.html');
}

?>