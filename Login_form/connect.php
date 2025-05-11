<?php
  /*  $host= "localhost";
    $user= "root";
    $pass= "";
    $db="login";
    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        echo"Falied to connect database".$conn->connect_error;
    }

    */

    
    

?>


<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);
}
?>
