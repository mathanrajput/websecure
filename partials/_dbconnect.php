<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection was no successfull because of this error: --> " . mysqli_connect_error($conn));
}
// else{
//     echo "Connection was Successfull";
// }

?>