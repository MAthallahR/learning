<?php 
$hostname="localhost";
$username= "root";
$password= "";
$dbname= "inpo";
$db= mysqli_connect($hostname,$username,$password,$dbname);
if ($db->connect_error) {
    die("youre retarted". $db->connect_error);
}
?>
