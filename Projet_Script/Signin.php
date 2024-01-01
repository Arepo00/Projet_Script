<?php 

session_start();
session_destroy();
/*if (!isset($_SESSION['email'])) {
  
  header('Location:main.php'); 
  exit();

}else{

  session_destroy();

}*/

include ('config3.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

   <title>Sign in</title>
   
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   

    

  </head>
  <body>
    <div  class="body1" >
    <section class="wrapper">
      <div class="form signup">
        <header>Sign in</header>
        


        <form action="" method="post">

          <input type="text" name="emaili" placeholder="Email address" required />
          <span style='color:red'><?php echo $emailerrora ?></span>
            <input type="password" name="passi" placeholder="Password" required />
            <span style='color:red'><?php echo $passerrora ?></span>

         <!--   <input type="" name="idi"  /> -->

         <!-- <div class="checkbox">

                <select class="form signup" id="select1">
                  <option value="1">People 1</option>
                  <option value="2">People 2</option>
                  <option value="3">People 3</option>
                </select>
                <label for="form signup">No Of People</label>
            
          </div>-->
          
             
          <input type="submit" name="submiti" value="Sign in"/>    

         
          
          <?php
            if(!empty($uc)){
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>$uc</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  

          

        <!--<button  type="submit" >Submit</button>--> 
        </form>
      </div>
      <a href="main1.php"><div class="form login">
        <header>Home</header>
        
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