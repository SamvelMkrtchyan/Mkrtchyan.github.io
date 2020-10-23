<?php

$recepient = "nvazovsky@gmail.com";
$sitename = "Labs";

$name = trim($_POST["name"]);
$mail = trim($_POST["mail"]);
$phone = trim($_POST["text"]);
$message = "Имя: $name \nEmail: $mail \nСообщение: $phone \n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>