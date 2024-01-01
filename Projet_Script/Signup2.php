<?php 

session_start();
session_destroy();
/*if (!isset($_SESSION['email'])) {
  
  header('Location:main.php'); 
  exit();

}else{

  session_destroy();

}*/

include ('config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Add user</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Add user</header>
        


        <form action="" method="post">
          <input type="text" name="fname" value="<?php echo $firstnamevalue ?>" placeholder="First name" required />
          <input type="text" name="lname" value="<?php echo $lastnamevalue ?>" placeholder="Last name" required />
          <input type="text" name="email" value="<?php echo $emailValue ?>" placeholder="Email address" required />
          <span style='color:red'><?php echo $emailerror ?></span>
          
          <input type="password" name="pass" placeholder="Password" required />
          <span style='color:red'><?php echo $passerror ?></span>
         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="submit" value="Add"/>    

         
          
          <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

          

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
   
    
    </div>
    
    <div class="rowaw" >
   Bukmokmok Copyright © 2023 La Mama Nonna - All rights reserved || Designed By: Kamal  
    </div>
    </div>
    </footer>
</html>