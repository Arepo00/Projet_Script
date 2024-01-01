<?php
$emailer= "";

$emailValue = "";
$lnameValue = "";
$fnameValue = "";

$id="";

$firstnamevalue="";
$lastnamevalue ="";
     $emailvalue="";

$passerror="";
$emailerror="enter a valid email";
$errorMesage = "";
$successMesage = "";


if(isset($_POST["submitorrr"])){

  header("Location:Login.php");
   
 

}


if(empty($emailValue)) {
      
}
 else if(preg_match("/\w+(@gmail.com){1}$/",$emailvalue)==1 ){

 }else{
 $emailer="Please enter a valid Email";
}




    //include connection file
        
    include ('cnx.php');
   

    //create in instance of class Connection
    
    $connex= new connection();
  

    //call the selectDatabase method
    
    
    $connex->selectDatabase('mydata2');
   
    
    //include the client file

    include ('client.php');

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['idup'];

//call the staticbselectClientById method and store the result of the method in $row

$row=client::selectClientById('client',$connex->conn,$id);

$emailValue = $row["email"];
$lnameValue = $row["lastname"];
$fnameValue = $row["firstname"];

}

 if(isset($_POST["submito"])){

    $firstnamevalue = $_POST['finame'];
     $lastnamevalue = $_POST['laname'];
     $emailvalue = $_POST['emailo'];
     
   

    if(empty($firstnamevalue) || empty($lastnamevalue) || empty($emailvalue) ){

           
    }else{


      if(preg_match("/\w+(@gmail.com){1}$/",$emailvalue)==1 ){


 //create a new instance of client ($client) with inputs values
        
 $client=new client($firstnamevalue,$lastnamevalue,$emailvalue,'');

        

 //call the static updateClient method and give $client in the parameters
 client::updateClient($client,'client',$connex->conn,$_GET['idup']);

 $successMesage = "New record updated successfully";

      }else{
      $emailer="Please enter a valid Email";
     }



        
       
            
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Update client</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Update client</header>
        


        <form action="" method="post">
          <input type="text" name="finame" value="<?php echo $fnameValue . $firstnamevalue ?>" placeholder="First name" required />
          <input type="text" name="laname" value="<?php echo $lnameValue . $lastnamevalue ?>" placeholder="Last name" required />
          <input type="text" name="emailo" value="<?php echo $emailValue . $emailvalue ?>" placeholder="Email address" required />
          <span style='color:red'><?php echo $emailer ?></span>
          
         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="submito" value="Commit"/>
          

          <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

          <span style='color:red'><?php echo $passerror ?></span>

         
          
          

          

        <!--<button  type="submit" >Submit</button>--> 
        </form>
      </div>
      <a href="Login.php"><div class="form login">
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
