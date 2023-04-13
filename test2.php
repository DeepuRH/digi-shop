<?php

$str="hi how are you";
$key="deepu";
$chiper="AES-128-CTR";//inbuilt method
$ivLen=openssl_cipher_iv_length($chiper);
$iv=openssl_random_pseudo_bytes(16);
// $iv=1234567891234567;//depending on method it is used
$option=0;

echo(openssl_encrypt($str,$chiper,$key,$option,$iv));



?>