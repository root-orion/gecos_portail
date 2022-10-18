<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'hec');
 
/* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
$servname = 'localhost';
$dbname = 'hec';
$user = 'root';
$pass = '';

try{
    $link = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
?>