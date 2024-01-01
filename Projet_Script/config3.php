<?php 

$emailerrora="";
$passerrora="";
$erroraMesage="";
$successaMesage="";

$emailV ="";
$passwordV ="";
$idV ="";

$uc="";

if(isset($_POST["submiti"])){

    
     $emailV = $_POST['emaili'];
     $passwordV = $_POST['passi'];

     if(empty($emailV) || empty($passwordV)) {
      
     }
     else if(strlen($passwordV)<8){
      $passerrora="Password must contain 8 characters";
      
     }else if(preg_match("/[A-Z]+/",$passwordV)==0){
     
      $passerrora="Password must contain at least one capital letter";
      
     }

      if(preg_match("/\w+(@gmail.com){1}$/",$emailV)==1 ){

      }else{
      $emailerrora="Please enter a valid Email";
   }



     if(preg_match("/\w+(@gmail.com){1}$/",$emailV)==1 && preg_match("/[A-Z]+/",$passwordV)==1 && strlen($passwordV)>=8){


        

        /*session_start();
        
        $_SESSION["email"]=$emailValue;
        $_SESSION["pass"]=$passwordValue;
         
        header("Location:main.php");*/

       //include connection file
        
       include ('cnx.php');
   

    //create in instance of class Connection
    
    $connex= new connection();
  

    //call the selectDatabase method
    
    
    $connex->selectDatabase('mydata2');
   
    
    //include the client file

    include ('client.php');

    //create new instance of client class with the values of the inputs
    
    //$client= new client('','',$emailV,$passwordV);


    $clients = client::selectAllClients2('client',$connex->conn);
    //$client= client::selectClientByem('client',$connex->conn,$emailV);
       
    foreach($clients as $row) {

      if(($emailV=="habibi@gmail.com") && ($passwordV=="H1234567")){


         session_start();
        
        $_SESSION['emaiil']=$emailV;
        $_SESSION['passi']=$passwordV;
         header("Location:Login.php");
        
       }else if(($emailV==$row['email']) && (password_verify($passwordV,$row["password"]))){


         session_start();

        
        $_SESSION['emaili']=$emailV;
        $_SESSION['passi']=$passwordV;
        $_SESSION['idi']=$row['id_cl'];


         header("Location:main.php");
        
       }else{

        $uc="No such user in database";
       }
       
       
        
    }
    






//give the $successMesage the value of the static $successMsg of the class



//give the $errorMesage the value of the static $errorMsg of the class



$emailValue = "";
$lnameValue = "";
$fnameValue = "";   



     }else{

     
     }
}



?>