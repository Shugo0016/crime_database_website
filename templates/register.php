<?php
include "connect.php";
$email = $_POST['createEmail'];
$password = $_POST['createPass'];
echo "Email: " . $email . "<br>";
echo "Password: " . $password;
?>