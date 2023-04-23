<?php
include "connect.php";
// Get the values from the form
$em = $_POST['InputEmail'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE email LIKE '$em' and password LIKE
'$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)===1){
$row = mysqli_fetch_assoc($result);
if($row['username'] === $un && $row['passwordIn']===$pass){
echo "login successful!";
}else{
header("Location: index.html?error=incorrect username or password");
exit();
}
}else{
header("Location: index.html?error=incorrect username or password");
exit();
}
?>