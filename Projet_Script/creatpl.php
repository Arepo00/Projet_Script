<?php 

/*session_start();
session_destroy();*/
/*if (!isset($_SESSION['email'])) {
  
  header('Location:main.php'); 
  exit();

}else{

  session_destroy();

}*/

//include ('config.php');








$emailerror="";
$passerror="";
$errorMesage="";
$succesMesage="";

$namevalue ="";
$pricevalue ="";
$desvalue ="";


if(isset($_POST["add"])){

    $namevalue = $_POST['nomp'];
     $pricevalue = $_POST['prixp'];
     $desvalue = $_POST['descr'];
     

     if(empty($namevalue) || empty($pricevalue )) {
      
     }
     else{

            
       //include connection file
        
       include ('cnx.php');
   

       //create in instance of class Connection
       
       $connex= new connection();
     
   
       //call the selectDatabase method
       
       
       $connex->selectDatabase('mydata2');
      
       
       //include the client file
   
       include ('plat.php');
   
       //create new instance of client class with the values of the inputs
       
       $plat= new plat($namevalue,$pricevalue,$desvalue);
   
     

   //call the insertClient method
   
   $plat->insertPlat('plat',$connex->conn);
   
   //give the $successMesage the value of the static $successMsg of the class
   
   
   $succesMesage=plat::$successaMsg;
   
   //give the $errorMesage the value of the static $errorMsg of the class
   
   
   
   $namevalue ="";
$pricevalue ="";
$desvalue ="";
   

     }
   }



    




?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Add meal</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Add meal</header>
        


        <form action="" method="post">
          <input type="text" name="nomp"  placeholder="Meal name" required />
          <input type="text" name="prixp"  placeholder="Meal price " required />
          <input type="text" name="descr"  placeholder="Meal description" required />

         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="add" value="Add"/>    

         
          
          <?php
            if(!empty($succesMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$succesMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

          

        <!--<button  type="submit" >Submit</button>--> 
        </form>
      </div>
      <a href="readpl.php"><div class="form login">
        <header>Return</header>
        
      </div></a>
      
    </section>
</div>
  </body>
  <footer>
    <div class="footer">
    
    <div class="row">
   
    
    </div>
    
    <div class="rowaw" >
   Bukmokmok Copyright © 2023 La Mama Nonna - All rights reserved || Designed By: Kamal  
    </div>
    </div>
    </footer>
</html>