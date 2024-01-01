<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['iddepl'];

     //include connection file
        
     include ('cnx.php');
   

     //create in instance of class Connection
     
     $connex= new connection();
   
 
     //call the selectDatabase method
     
     
     $connex->selectDatabase('mydata2');
    
     
     //include the client file
 
     include ('plat.php');

//call the static deleteClient method
 
plat::deletePlat('plat',$connex->conn,$id);

header("Location:readpl.php");
}
?>