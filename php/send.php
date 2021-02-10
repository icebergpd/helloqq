<?php
$contact_name = $_POST['contact_message'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$contact_name = htmlspecialchars($contact_name);
$contact_email = htmlspecialchars($contact_email);
$contact_message = htmlspecialchars($contact_message);
$contact_name = urldecode($contact_name);
$contact_email = urldecode($contact_email);
$contact_message = urldecode($contact_message);
$contact_name = trim($contact_name);
$contact_email = trim($contact_email);
$contact_message = trim($contact_message);
if (mail("icebergpd@gmail.com", "Заявка с сайта", "Имя:".$contact_name.". E-mail: ".$contact_email.". Message: ".$contact_message ,"From: icebergpd1@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>