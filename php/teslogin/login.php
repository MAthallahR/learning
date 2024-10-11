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
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            header("location: dashboard.php");
        }
        else{
            echo "<br>";
            echo "akun tidak di temukan";
            echo "<br>";
            echo "atau";
            echo "<br>";
            echo "password salah";
        }
    }
    ?>
    <h1>LOGINKAN</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="namamu">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="oke gas" name="login">
        <?php 
        ?>
    </form>
</body>
</html>
