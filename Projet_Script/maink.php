<?php 
session_start();

if ((!isset($_SESSION['emaili']))  ) {


  



  if ((!isset($_SESSION['email']))  ) {



    header('Location: Signin.php'); 
  exit();
  
  }
  
  




  //


  
}

//$idV =$_SESSION['idi'];

  //


  //include connection file
        
  include ('cnx.php');
   

  //create in instance of class Connection
  
  $connex= new connection();


  //call the selectDatabase method
  
  
  $connex->selectDatabase('mydata2');
 
  
  //include the client file

  include ('plat.php');

//call the staticbselectClientById method and store the result of the method in $row

$suc="";

$row=plat::selectPlatById('plat',$connex->conn,'1');
$row1=plat::selectPlatById('plat',$connex->conn,'2');
$row2=plat::selectPlatById('plat',$connex->conn,'3');
$row3=plat::selectPlatById('plat',$connex->conn,'4');
$row4=plat::selectPlatById('plat',$connex->conn,'6');
$row5=plat::selectPlatById('plat',$connex->conn,'7');

$nameval = $row["nompl"];
$priceval = $row["prixpl"];
$desval = $row["descr"];






?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Restaurant menu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
<body>
  <nav style="background-color: rgba(15, 23, 43, .9);">
    <div class="menu">
      <div class="logo">
        <a href="main.php">La Mama Nonna</a>
      </div>
      <ul>
        <li><a href="main.php">Home</a></li>
        
        <li><a href="term.php">Terms & Conditions</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="main1.php ">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!--<div class="img"></div>-->

 <!--le menu-->
<!--first row-->
 <div class="card-deck" style="background-color: rgba(15, 23, 43, .9);">
    <div class="card" class="card border-primary mb-3" style=" max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 140px ; margin-top: 200px ; background-color: whitesmoke;" >
      <img class="card-img-top" src="Couscous.jpg" alt="Card image cap">
      <div class="card-body " >
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb=<?php echo $row["id_pl"] ?>'>Buy</a></small>
        <?php
            if(!empty($suc)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$suc</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?> 
      </div>
    </div>

    <div class="card" class="card border-primary mb-3" style="max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 160px ; margin-top: 200px ; background: whitesmoke;">
      <img class="card-img-top" src="rf.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row1["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row1["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row1["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb1=<?php echo $row1["id_pl"] ?>'>Buy</a></small>
      </div>
    </div>

    <div class="card" class="card border-primary mb-3" style="max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 160px ; margin-top: 200px ; background-color:whitesmoke ;">
      <img class="card-img-top" src="seffa.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row2["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row2["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row2["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb2=<?php echo $row2["id_pl"] ?>'>Buy</a></small>
      </div>
    </div>
  </div>

  <!--second row-->

  <div class="card-deck" style="background-color: rgba(15, 23, 43, .9);">
    <div class="card" class="card border-primary mb-3" style=" max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 140px ; margin-top: 200px ; background-color: whitesmoke;" >
      <img class="card-img-top" src="OIP.jpg" alt="Card image cap">
      <div class="card-body " >
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row3["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row3["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row3["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb3=<?php echo $row3["id_pl"] ?>'>Buy</a></small>
      </div>
    </div>



    
    <div class="card" class="card border-primary mb-3" style=" max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 140px ; margin-top: 200px ; background-color: whitesmoke;" >
      <img class="card-img-top" src="ga.jpg" alt="Card image cap">
      <div class="card-body " >
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row4["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row4["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row4["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb4=<?php echo $row4["id_pl"] ?>'>Buy</a></small>
      </div>
    </div>



    <div class="card" class="card border-primary mb-3" style=" max-width: 18rem; height: 500px;border-color: #FEA116 ; border-radius: 10px; border-width: 5px; margin-left: 140px ; margin-top: 200px ; background-color: whitesmoke;" >
      <img class="card-img-top" src="mha.jpg" alt="Card image cap">
      <div class="card-body " >
        <h5 class="card-title" style="color: #FEA116;"><u><?php echo $row5["nompl"] ?></u></h5>
        <p class="card-text"><i><b><?php echo $row5["descr"] ?></b></i></p>
      </div>
      <div class="card-footer">
        <small style="color: #FEA116;"><h4><?php echo $row5["prixpl"] ?></h4></small>
        <small style="color: #FEA116;"><a class ='btn btn-warning btn-mb' href='addcm.php?idb5=<?php echo $row5["id_pl"] ?>'>Buy</a></small>
      </div>
    </div>




    
  </div>
<!--<div class="img"></div>-->
  

 
  
</body>



</html>
