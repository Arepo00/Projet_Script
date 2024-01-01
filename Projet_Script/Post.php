<?php  
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la Mamaaaaa</title>
</head>
<body>



<?php  
echo 'Welcome, your informarion: <br>';
echo "First name;    " .$_SESSION["fname"]."<br>";
echo "Last name:    " .$_SESSION["lname"]. "<br>";
echo "Email :     " .$_SESSION["email"]. "<br>";
echo "Password :    " .$_SESSION["pass"]. "<br>";

?>



<!-- 


$emailerror="";

if( isset($_POST['submit']) ) {
     $firstnamevalue = $_POST['fname'];
     $lastnamevalue = $_POST['lname'];
     $emailValue = $_POST['email'];
     $passwordValue = $_POST['pass'];
     if(empty($emailValue) || empty($passwordValue )) {
        $emailerror="Please enter a valid Emsi Email";
    echo'<h1> empty values </h1>';
    }
    }else{
    echo("Please Log In!");
    }


?>

-->



<!--  preg_match("/\w+(@gmail.com){1}$/",$emailValue)==0



else{

     echo 'Welcome, your informarion: <br>';
     echo "First name $firstnamevalue<br>";
     echo "Last name: $lastnamevalue <br>";
     echo "Email : $emailValue <br>";
     echo "Password : $passwordValue <br>";
    
    }-->

</body>
</html>

