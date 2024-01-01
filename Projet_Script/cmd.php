<?php

class cmd{


public $id_com;
public $id_cli;
public $id_pla;



public static $erroraaMsg ="";

public static $successaaMsg="";


        public function __construct($id_cli,$id_pla){

    //initialize the attributs of the class with the parameters, and hash the password

    $this->id_cli=$id_cli;
    $this->id_pla=$id_pla;
   

}

        public function insertCmd($tableName,$conn){

//insert a client in the database, and give a message to $successMsg and $errorMsg

$sql="INSERT INTO $tableName (id_cli, id_pla) VALUES ('$this->id_cli', '$this->id_pla')"; 
if (mysqli_query($conn,$sql)) {

    //self::$successMsg = "New record created successfully";

} else {

    self::$errorMsg= "Error:" /*$sql*/ . "<br>" . mysqli_error($conn);

}
}

        public static function  selectAllCmd($tableName,$conn){

//select all the client from database, and inset the rows results in an array $data[]


$sql="SELECT id_com, id_cli, id_pla FROM $tableName"; $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

// output data of each row
$data=[];
while($row = mysqli_fetch_assoc($result)) {

    $data[]=$row;
}

return $data;

}

}

        static function selectCmdById($tableName,$conn,$id){

    //select a client by id, and return the row result
    
    $sql="SELECT id_cli, id_pla FROM $tableName WHERE id_com='$id'"; 
    $result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row

$row =mysqli_fetch_assoc($result);

}
    return $row;
        }

        static function updateCmd($com,$tableName,$conn,$id){
    //update a client of $id, with the values of $client in parameter
    //and send the user to read.php
   

$sql = "UPDATE $tableName SET id_cli='$com->id_cli', id_pla='$com->id_pla' WHERE id_com='$id'";
if (mysqli_query($conn,$sql)) {
    //self::$successMsg = "New record updated successfully";

//header("Location:Signup.php");
} else {
    self::$errorMsg= "Error updating record: " . mysqli_error($conn);

}

        }

        static function deleteCmd($tableName,$conn,$id){
    //delet a client by his id, and send the user to read.php
    
    $sql= "DELETE FROM $tableName WHERE id_com='$id'";
        
    if(mysqli_query($conn, $sql)) {

        

} else {

    self::$errorMsg= "Error deleting record:" . mysqli_error($conn);
}

  
    }

}



?>
