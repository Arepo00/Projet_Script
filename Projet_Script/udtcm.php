<?php
$emailer= "";

$ce = "";

$id="";

$namevalue ="";
$pricevalue ="";
$desvalue ="";

$c ="";
$cl ="";
$pt ="";

$ca ="";
$cla ="";
$pta ="";


$emailValue ="";
$lnameValue ="";
$fnameValue ="";


$passerror="";
$emailerror="enter a valid email";
$errorMesage = "";
$success = "";


if(isset($_POST["submitorrrra"])){

  header("Location:readcm.php");
   
 

}


if(empty($namevalue)) {
      
}
 




    //include connection file
        
    include ('cnx.php');
   

    //create in instance of class Connection
    
    $connex= new connection();
  

    //call the selectDatabase method
    
    
    $connex->selectDatabase('mydata2');
   
    
    //include the client file

    include ('cmd.php');

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['iduc'];

//call the staticbselectClientById method and store the result of the method in $row

$row=cmd::selectCmdById('commande',$connex->conn,$id);


$cl= $row["id_cli"];
$pt = $row["id_pla"];

}

 if(isset($_POST["submitooa"])){

    $cla = $_POST['p'];
     $pta = $_POST['d'];
     
     
   

    if(empty($cla)){

           
    }else{


      


 //create a new instance of client ($client) with inputs values
        
 $como=new cmd($cla,$pta);

        

 //call the static updateClient method and give $client in the parameters
 cmd::updateCmd($como,'commande',$connex->conn,$_GET['iduc']);

 $ce = "New record Command updated successfully";

      


        
       
            
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Update Command</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Update Command</header>
        


        <form action="" method="post">
          <input type="text" name="p" value="<?php echo $cl  . $cla ?>"  placeholder="ID Client " required />
          <input type="text" name="d"   value="<?php echo $pt . $pta ?>" placeholder="ID Meal" required />
          
         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="submitooa" value="Commit"/>
             

          <?php
            if(!empty($ce)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$ce</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

         

         
          
          

          

        <!--<button  type="submit" >Submit</button>--> 
        </form>
      </div>
      <a href="readcm.php"><div class="form login">
        <header>Return</header>
        
      </div></a>
      
    </section>
</div>
  </body>
  <footer>
    <div class="footer">
    
    <div class="row">
    <ul>
    <li><a href="Login.php">Contact us</a></li>
    <li><a href="Signup.php">Reserve</a></li>
    <li><a href="aboutus.php">About us</a></li>
    <li><a href="term.php" >Terms & Conditions</a></li>
    <li><a href="main.php">Menu</a></li>
    </ul>
    
    </div>
    
    <div class="rowaw" >
   Bukmokmok Copyright © 2023 La Mama Nonna - All rights reserved || Designed By: Kamal  
    </div>
    </div>
    </footer>
</html>
