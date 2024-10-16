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
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    form{
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-radius: 5px;
        height: 350px;
        width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .usn, .pw{
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box; 
    }
    .usn:hover, .pw:hover{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .usn:focus, .pw:focus{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        font-size: larger;
        transition: font-size .5s;
    }
    .login{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .login:hover{
        background-color: #3e8e41;
        font-size: larger;
        transition: font-size .5s;
    }
</style>
<body>
    <form action="login.php" method="post">
    <h1>CEPATKAN LOGIN</h1>
        <input type="text" name="username" placeholder="namamu" required class="usn">
        <br>
        <input type="password" name="password" placeholder="password" class="pw">
        <br>
        <input type="submit" value="oke gas" name="login" class="login"> 
        <br>
        <p> belum punya akun? <a href="register.php">REGISTER</a></p>
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
    </form>
</body>
</html>
