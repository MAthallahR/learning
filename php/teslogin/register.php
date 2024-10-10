<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: wheat;
    }
</style>
<body>
<?php
include("service/database.php");
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($check_sql);

    if($result->num_rows > 0){
        echo "namamu sudah di pakai";
    } else {
        $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";

        if($db->query($sql)){
            echo "register berhasil";
        } else {
            echo "register gagal";
        }
    }
}
?>
    <h1>CEPATKAN BAYAR</h1>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="namamu">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="oke gas" name="register">
    </form>
</body>
</html>