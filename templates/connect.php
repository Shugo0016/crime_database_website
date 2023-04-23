<?php
// To use PDO to connect to a database, you need the following information:
$servname = "localhost";
$username = "kaya";
$password = "Sab";
$dbname = "CrimeTracker2023";
// database connection
$conn = mysqli_connect($servname, $username, $password, $dbname);
if(!$conn){
echo "Connection failed";
}
?>