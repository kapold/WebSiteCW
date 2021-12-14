<?php
$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];
$cov = "\"".$review."\"";

if (strlen($name) < 1 || strlen($email) < 1 || strlen($review) < 1){
    header('location: ../error/error.html');
    exit();
}

$connection = new mysqli("zoo.by", "root", "", "oz-reviews");
if ($connection->connect_error){
    header('location: ../error/error.html');
    exit();
}

$sql = "INSERT INTO reviews (name, email, review)
        VALUES('$name', '$email', '$cov')";

if ($connection->query($sql)) {

}

$connection->close();
header('location: ../../index.php');


require_once('../form-lesson/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'online_zoo@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'zidB2KhZtm8K6B1NJAdG'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('online_zoo@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress($email);     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Ваш отзыв размещене на сайте. С уважением, zoo.by';
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
<td>'.$cov.'</td>
</tr>
</table>
';
$mail->AltBody = '';

if(!$mail->send()) {
    header('location: ../../pages/error/error.html');
} else {
    header('location: ../error/thanks.html');
}

?>