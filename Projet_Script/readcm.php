<html>
    <head>
        <link rel="stylesheet" href="style.css">
       <style>
    /* style pour le premier div */
#div0 {
    margin-bottom: 40px;
    padding: 100px;
    background-color: #f2f2f2;
    border-radius: 5px;
}
nav{
    position: fixed;
    background: rgba(15, 23, 43, .9);
    width: 100%;
    padding: 10px 0;
    z-index: 12;
  }
/* style pour les inputs dans le premier div */
#div0 input {
    margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

/* style pour le bouton dans le premier div */
#div0 button {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le message d'erreur dans le premier div */
#div0 #s1 {
    margin-top: 10px;
}

/* style pour le deuxième div */
#div1 {
    margin-bottom: 20px;
    
    padding: 150px;
    background-color: rgba(15, 23, 43, .9);
    border-radius: 5px;
}

/* style pour le bouton dans le deuxième div */
#div1 button {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le tableau dans le deuxième div */
#div1 table {
    border-collapse: collapse;
    width: 100%;
}

/* style pour les cellules de tableau dans le deuxième div */
#div1 td, #div1 th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* style pour les cellules de titre de tableau dans le deuxième div */
#div1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #FEA116;
    color: white;
}

/* style pour le troisième div */
#div2 {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
}

/* style pour le formulaire dans le troisième div */
#div2 form {
    display: flex;
    flex-direction: column;
}

/* style pour les labels dans le formulaire du troisième div */
#div2 form label {
    margin-bottom: 10px;
}

/* style pour les inputs dans le formulaire du troisième div */
#div2 form input[type="text"], #div2 form input[type="password"] {
    margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

/* style pour le bouton dans le formulaire du troisième div */
#div2 form input[type="submit"] {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le message d'erreur dans le formulaire du troisième div */
#div2 #s2 {
    margin-top: 10px;
}
       </style>
       <title>Commands</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body style="background-color: rgba(15, 23, 43, .9);">
        <nav>
            <div class="menu">
              <div class="logo">
                <a href="main.php">La Mama Nonna</a>
              </div>
              <ul>
                <li><a href="main2.php">Home</a></li>
                <li><a href="Login.php">Clients</a></li>
                <li><a href="readpl.php">Meals</a></li>
                <li><a href="main1.php ">Logout</a></li>
              </ul>
            </div>
          </nav>
          
        

        <div id="div1">

        <div >
    <h2 style='color:#ffc40c ;'>List of commands from database</h2>
    <!--<a  class="btn btn-primary" href="create.php" role="button">Signup</a>-->
    <!--<a   href="addcm.php" role="button"><button>Add Command</button></a>-->

    

    <br>
    <br>
    <table class="table">
       <thead>
        <tr>
            <th>ID-cm</th>
            <th>ID-cl</th>
            <th>Email</th>
            <th>ID-pl</th>
            <th>Meal name</th>
            
            
            <th>Action</th>
            
        </tr>
        </thead>
        <tbody>

        <?php

        //include connection file
        
       include ('cnx.php');
   

       //create in instance of class Connection
       
       $connex= new connection();
     
   
       //call the selectDatabase method
       
       
       $connex->selectDatabase('mydata2');
      
       
       //include the client file
   
       
       include ('cmd.php');
       include ('plat.php');
        include ('client.php');
       
        //call the static selectAllClients method and store the result of the method in $clients
        
       $comd = cmd::selectAllCmd('commande',$connex->conn);
       //$clients = client::selectAllClients('client',$connex->conn);
       
        foreach($comd as $row) {

            


           $ci = client::selectClientById('client',$connex->conn,$row['id_cli']);
           $pa = plat::selectPlatById('plat',$connex->conn,$row['id_pla']);


           echo " <tr>
            <td>$row[id_com]</td>
            <td>$row[id_cli]</td>
            <td>$ci[email]</td>
            <td>$row[id_pla]</td>
            <td>$pa[nompl]</td>
            <td>
            <a class ='btn btn-success btn-sm' href='udtcm.php?iduc=$row[id_com]'>edit</a>
            <a class ='btn btn-danger btn-sm' href='dltcm.php?iddec=$row[id_com]'>delete</a>
            </td>
        </tr>";
        }
        
        ?>
        </tbody>
        
    </table>
    </div>

        
        
        
        
        
        
        
        <!-- <button onclick="show()">Show users in table</button><br><br>
            <table border="2px" id="table1" >
                    <tr><th>Nom Complet</th><th>Password</th></tr>
            </table>-->
        </div>



            <!--<div id="div0">
            <div id="div2">Register <br><br></div>
            <input type="text" id="in1" placeholder="Enter you First name"><br>
            <input type="text" id="in3" placeholder="Enter you Last name"><br>
            <input type="text" id="in4" placeholder="Enter you e-mail"><br>
            <input type="text" id="in2" placeholder="Enter a password"><br>
            
            <span id="s1" style="color: red;"></span><br>
            <button  onclick="add()">Add user</button>
        </div>-->



       <!-- <div id="div2">
            <form action="test.php" onsubmit="return login()">
                <label for="in3">UserName:</label>
                <input type="text" id="in3"><br>
                <label for="in4">Password:</label>
                <input type="password" id="in4"><br>
                <span id="s2" style="color: red;"></span><br>
                <input type="checkbox" onclick="showPass()"> <center>Show password</center>
                <input type="submit" value="Sign up">
                
            </form>
        </div>-->
<!--<a href="test.html"><input type="submit" value="Login"></a>-->

        
    </body>
    <footer>
        <div class="footer">
        
        <div class="row">
        <ul>
       
        </ul>
        </div>
        
        <div class="rowaw">
            Bukmokmok Copyright © 2023 La Mama Nonna - All rights reserved || Designed By: Kamal  
        </div>
        </div>
        </footer>
</html>