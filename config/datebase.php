<?php 
function connectDB(){
$servername= "localhost";
$username="root";
$password="";
$dbname="bibliotheque";

// creaction de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// verification de la connexion
if ($conn->connect_error){
    die("connection falled;" .$conn->connect_error);
}
return $conn;
}
?>