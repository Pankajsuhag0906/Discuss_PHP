<?php
$servername="localhost";
$username="root";
$password=null;
$database="discuss";

try{
$conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "Connected Successfull <br>";
}
catch(PDOException $e){

    echo "Connection failed ".$e->getmessage();

}

// $conn=new mysqli($servername,$username,$password,$database);

// if($conn->connect_error){
//     die("Connection failed with DB ".$conn->connect_error);
// }




?>