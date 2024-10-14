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
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM users WHERE username='$username'";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        if(password_verify($_POST['password'], $data["password"])){
            $_SESSION["islogin"] = true;
            $_SESSION["username"] = $data["username"];
            header("Location: dashboard.php");
        }else{
            echo "password salah";
        }
    }else{
        echo "akun tidak di temukan";
    }
}
?>
    <h1>LOGINKAN</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="namamu" required>
        <br>
        <input type="password" name="password" placeholder="password" required>
        <br>
        <input type="submit" value="oke gas" name="login">
        <?php 
        ?>
    </form>
</body>
</html>
