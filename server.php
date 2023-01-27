<?php

$email = $_POST['email'];
$phone = $_POST['phone'];

$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);

$email = urldecode($email);
$phone = urldecode($phone);

$email = trim($email);
$phone = trim($phone);

echo $email;
echo "<br>";
echo $phone;

mail("aleksandrpirogov67@gmail.com", "Заявка с сайта", "E-mail:".$email.". Phone: ".$phone ,"From: aleksandrpirogov67@gmail.com \r\n");

if (mail("aleksandrpirogov67@gmail.com", "Заявка с сайта", "E-mail:".$email.". Phone: ".$phone ,"From: aleksandrpirogov67@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

// order@salesgenerator.pro