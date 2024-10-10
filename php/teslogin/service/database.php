<?php 
$hostname="localhost";
$username= "root";
$password= "";
$dbname= "inpo_logoin";
$db= mysqli_connect($hostname,$username,$password,$dbname);
if ($db->connect_error) {
    echo "youre retarted";
    die("". $conn->connect_error);
}
?>