<?php 

$emailer="";
$passerror="";
$errorMesage="";
$successMesage="";

$firstnamevalue ="";
$lastnamevalue ="";
$emailValue ="";
$passwordValue ="";


   

     if(empty($emailValue) || empty($passwordValue )) {
      
     }
      else if(preg_match("/\w+(@gmail.com){1}$/",$emailValue)==1 ){

      }else{
      $emailer="Please enter a valid Email";
   }




?>