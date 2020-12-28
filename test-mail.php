<?php
$to = "birapn.net@gmail.com"; 
$subject = "Test email"; 
$txt = "Hello world!"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: testuser@example.com' . "\r\n"; 
$headers .= 'Return-Path: testuser@example.com' . "\r\n"; 
mail($to,$subject,$txt,$headers, "-f contato@dianeticabrasil.com.br"); 
?>