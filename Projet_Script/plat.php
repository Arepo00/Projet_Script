<?php

class plat{

public $id_pl;
public $namepl;
public $prixpl;
public $despl;


public static $erroraMsg ="";

public static $successaMsg="";


        public function __construct($namepl,$prixpl,$despl){


    $this->namepl=$namepl;
    $this->prixpl=$prixpl;
    $this->despl=$despl;

}

        public function insertPlat($tableName,$conn){



$sql="INSERT INTO $tableName (nompl, prixpl,descr) VALUES ('$this->namepl', '$this->prixpl', '$this->despl')"; 
if (mysqli_query($conn,$sql)) {

    self::$successaMsg = "New Meal created successfully";

} else {

    self::$erroraMsg= "Error:" /*$sql*/ . "<br>" . mysqli_error($conn);

}
}

        public static function  selectAllPlat($tableName,$conn){




$sql="SELECT id_pl, nompl, prixpl, descr FROM $tableName"; $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

// output data of each row
$data=[];
while($row = mysqli_fetch_assoc($result)) {

    $data[]=$row;
}

return $data;

}

}

        static function selectPlatById($tableName,$conn,$id){

   
    
    $sql="SELECT id_pl, nompl, prixpl, descr FROM $tableName WHERE id_pl='$id'"; 
    $result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row

$row =mysqli_fetch_assoc($result);

}
    return $row;
        }

        static function updatePlat($plat,$tableName,$conn,$id){
    //update a client of $id, with the values of $client in parameter
    //and send the user to read.php
   

$sql = "UPDATE $tableName SET nompl='$plat->namepl', prixpl='$plat->prixpl', descr='$plat->despl' WHERE id_pl='$id'";
if (mysqli_query($conn,$sql)) {
    self::$successaMsg = "New record updated successfully";


} else {
    self::$erroraMsg= "Error updating record: " . mysqli_error($conn);

}

        }

        static function deletePlat($tableName,$conn,$id){
    //delet a client by his id, and send the user to read.php
    
    $sql= "DELETE FROM $tableName WHERE id_pl='$id'";
        
    if(mysqli_query($conn, $sql)) {

        

} else {

    self::$erroraMsg= "Error deleting record:" . mysqli_error($conn);
}

  
    }

}







?>
