<?php 

session_start();

$id1="";
$id3="";
$id4="";
$id5="";
$id6="";
$id7="";




$id2=$_SESSION['idi'];

//include connection file
        
include ('cnx.php');
   

//create in instance of class Connection

$connex= new connection();


//call the selectDatabase method


$connex->selectDatabase('mydata2');


//include the client file

include ('cmd.php');

if(isset($_POST["re"])){

header('Location:maink.php');
}

if($_SERVER['REQUEST_METHOD']=='GET'){



    if(!empty($_GET['idb'])){

        $id1 = $_GET['idb'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id1);
        $cm->insertCmd('commande',$connex->conn);


    }

    if(!empty($_GET['idb1'])){

        $id3 = $_GET['idb1'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id3);
        $cm->insertCmd('commande',$connex->conn);


    }

    if(!empty($_GET['idb2'])){

        $id4 = $_GET['idb2'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id4);
        $cm->insertCmd('commande',$connex->conn);


    }


    if(!empty($_GET['idb3'])){

        $id5 = $_GET['idb3'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id5);
        $cm->insertCmd('commande',$connex->conn);


    }

    if(!empty($_GET['idb4'])){

        $id6 = $_GET['idb4'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id6);
        $cm->insertCmd('commande',$connex->conn);


    }

    if(!empty($_GET['idb5'])){

        $id7 = $_GET['idb5'];

        $suc="Meal Added succesfully";
        $cm= new cmd($id2,$id7);
        $cm->insertCmd('commande',$connex->conn);


    }





   /* $id1 = $_GET['idb'];
    $id3 = $_GET['idb1'];
    $id4 = $_GET['idb2'];
    $id5 = $_GET['idb3'];
    $id6 = $_GET['idb4'];
    $id7 = $_GET['idb5'];

    $suc="Added succesfully";

     
    //header('Location:maink.php');
    

    $cm= new cmd($id2,$id1);


    //call the insertClient method
    
    $cm->insertCmd('commande',$connex->conn);*/





}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Command</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Command</header>
        


        <form action="" method="post">

          

         <!--   <input type="" name="idi"  /> -->

         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="re" value="Return"/>    

         
          
          <?php
            if(!empty($suc)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$suc</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

          

        <!--<button  type="submit" >Submit</button>--> 
        </form>
      </div>
      <a href="main1.php"><div class="form login">
        <header></header>
        
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