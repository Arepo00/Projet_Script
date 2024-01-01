<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['iddec'];

     //include connection file
        
     include ('cnx.php');
   

     //create in instance of class Connection
     
     $connex= new connection();
   
 
     //call the selectDatabase method
     
     
     $connex->selectDatabase('mydata2');
    
     
     //include the client file
 
     include ('cmd.php');

//call the static deleteClient method
 
cmd::deleteCmd('commande',$connex->conn,$id);

header("Location:readcm.php");
}
?>
