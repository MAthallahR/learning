<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="index.php" method="post">
        <input type="text" name="username" required>
        <br>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="login" name="login">
        <?php
        session_start();
        include("database.php");
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = $db->query($sql);
            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                $_SESSION["username"] = $data["username"];
                if ($username === 'admin') {
                header("location: admin_dashboard.php");
                }elseif($password === "user"){
                    header("location: user_dashboard.php");
                }
            }else{
                echo '<span class="error">your nigga</span>';
            }
        }
        ?>
    </form>
</body>
</html>
