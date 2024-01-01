<?php 

$emailerror="";
$passerror="";
$errorMesage="";
$successMesage="";

$firstnamevalue ="";
$lastnamevalue ="";
$emailValue ="";
$passwordValue ="";

if(isset($_POST["submit"])){

    $firstnamevalue = $_POST['fname'];
     $lastnamevalue = $_POST['lname'];
     $emailValue = $_POST['email'];
     $passwordValue = $_POST['pass'];

     if(empty($emailValue) || empty($passwordValue )) {
      
     }
     else if(strlen($passwordValue)<8){
      $passerror="Password must contain 8 characters";
      
     }else if(preg_match("/[A-Z]+/",$passwordValue)==0){
     
      $passerror="Password must contain at least one capital letter";
      
     }

      if(preg_match("/\w+(@gmail.com){1}$/",$emailValue)==1 ){

      }else{
      $emailerror="Please enter a valid Email";
   }



     if(preg_match("/\w+(@gmail.com){1}$/",$emailValue)==1 && preg_match("/[A-Z]+/",$passwordValue)==1 && strlen($passwordValue)>=8){

        session_start();
        $_SESSION["fname"]=$firstnamevalue;;
        $_SESSION["lname"]=$lastnamevalue;
        $_SESSION["email"]=$emailValue;
        $_SESSION["pass"]=$passwordValue;
         
       // header("Location:main.php");

       //include connection file
        
       include ('cnx.php');
   

    //create in instance of class Connection
    
    $connex= new connection();
  

    //call the selectDatabase method
    
    
    $connex->selectDatabase('mydata2');
   
    
    //include the client file

    include ('client.php');

    //create new instance of client class with the values of the inputs
    
    $client= new client($firstnamevalue,$lastnamevalue,$emailValue,$passwordValue);


//call the insertClient method

$client->insertClient('client',$connex->conn);

//give the $successMesage the value of the static $successMsg of the class


$successMesage=client::$successMsg;

//give the $errorMesage the value of the static $errorMsg of the class



$emailValue = "";
$lnameValue = "";
$fnameValue = "";   



     }else{

      //$errorMesage=client::$errorMsg;
     }
}



?>