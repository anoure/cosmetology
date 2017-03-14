<?php
  $recepient = "nguzerya@gmail.com";
  $sitename = "Salon";

  $name = trim($_POST['user_name']);
  $phone = trim($_POST['user_phone']);
  $message = "Имя: $name <br> Телефон: $phone";

  $pagetitle = "Новая заявка с сайта \"$sitename\"";
  mail($recepient, $pagetitle, $message, "Content-type:text/html;charset=utf-8");
?>
