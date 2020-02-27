<?php

  // strlen() = // String er length count;


   $x = "hello";
   echo strlen($x) . "<br>";


   $y = "Hello Bangladesh jabo";
   echo  str_word_count($y) . "<br>";


   $z = "Ifteear";

   echo strrev($z) . "<br>";

   $i = "Hello Bangladesh";
   $j = "Canada";
    echo str_replace("Bangladesh", $j, $i) . "<br>";



   $password = 12345678;

   echo md5($password) . "<br>";

   $newpassword = 12345678;
   echo md5($newpassword) . "<br>";

   $hashpassword = 12345678;
   echo hash('haval160,4',$hashpassword) . "<br>";


   $hello = "abul khela parena";

   echo substr($hello, 0,5) . "...." . "<br>";


 ?>
