<?php

 $age = 18;
 $gender = "male";
 $nationality = "Bangladesh";
 $speed = 50;

     //
     // if($age >= 18 && $age <=32)
     // {
     //   if($gender == 'male'){
     //     if($nationality == "Bangladesh"){
     //       echo "you can play";
     //     }else{
     //       echo "tumi bangladeshi na";
     //     }
     //   }else{
     //     echo "Shudhu cheleder jonno";
     //   }
     // }else {
     //   echo "Tomar boyosh hoi nai";
     // }


     if($age >= 18){
       if($gender == "male"){
         if($nationality == "bangladesh"){
            if($speed >= 50){
              echo "you can play";
            }else{
              echo "tomar speed kom";
            }
         }else{
           echo "only for bangladeshi";
         }
       }else{
         echo "cheleder jonno";
       }
     }else{
       echo "boyosh kom";
     }

     

 ?>
