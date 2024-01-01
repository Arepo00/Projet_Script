<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['idde'];

     //include connection file
        
     include ('cnx.php');
   

     //create in instance of class Connection
     
     $connex= new connection();
   
 
     //call the selectDatabase method
     
     
     $connex->selectDatabase('mydata2');
    
     
     //include the client file
 
     include ('client.php');

//call the static deleteClient method
 
client::deleteClient('client',$connex->conn,$id);

header("Location:Login.php");
}
?>
