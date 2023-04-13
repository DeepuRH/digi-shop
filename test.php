<?php

$str="MY/HTe4nEnqTah43+6k=";
$key="deepu";
$chiper="AES-128-CTR";//inbuilt method
$iv=1234567891234567;//depending on method it is used
$option=0;

echo(openssl_decrypt($str,$chiper,$key,$option,$iv));

// $str1="MY/HTe4nEnqTah43+6k=";
// echo(openssl_decrypt($str1,$chiper,$key,$option,$iv));

?>