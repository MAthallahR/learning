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
    .register{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .register:hover{
        background-color: #3e8e41;
        font-size: larger;
        transition: font-size .5s;
    }
</style>
<body>
    <form action="register.php" method="post">
        <h1>CEPATKAN DAFTAR</h1>
        <input type="text" name="username" placeholder="namamu" required class="usn">
        <br>
        <input type="password" name="password" placeholder="password" class="pw">
        <br>
        <input type="submit" value="oke gas" name="register" class="register"> 
        <br>
        <p>sudah punya akun? <a href="login.php">LOGIN</a></p>
        <?php
include("service/database.php");
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

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
    </form>
</body>
</html>
