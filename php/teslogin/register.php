<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #303030;
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
        height: 415px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .usn, .pw, .email{
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box; 
        border: 1px solid rgba(0, 0, 0, 0.233);
    }
    .usn:hover, .pw:hover, .email:hover{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .usn:focus, .pw:focus, .email:focus{
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
        <input type="text" name="username" placeholder="nama" required class="usn">
        <br>
        <input type="email" name="email" placeholder="email" required class="email">
        <br>
        <input type="password" name="password" placeholder="password" class="pw">
        <br>
        <input type="submit" value="oke gas" name="register" class="register"> 
        <br>
        <p>sudah punya akun? <a href="login.php">LOGIN</a></p>
        <?php
        include("service/database.php");
        if(isset($_POST['register'])){
            $username = $_POST['username']; // Mengambil Username
            $password = $_POST['password']; // Mengambil Password
            $email = $_POST['email']; // Mengambil Email

            // Mengecek apa password lebih dari 8 kata atau tidak
            if (strlen($password) < 8) {
                echo "password harus lebih dari 8 kata";
            } else {
                // Menyamarkan password jika sudah lebih dari 8 kata (kenapa harus disamarkan? karena function password_verify di login hanya bekerja jika di samarkan)
                $hash_password = password_hash($password, PASSWORD_BCRYPT);

                // Cek jika nama atau email sudah ada atau belum
                $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
                $result = $db->query($check_sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if ($row["username"] == $username) {
                        echo "namamu sudah di pakai";
                    } elseif ($row["email"] == $email) {
                        echo "emailmu sudah di pakai";
                    }
                } else {
                    // Memasukan data ke database
                    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hash_password', '$email')";
                    if ($db->query($sql)) {
                        echo "register berhasil";
                    } else {
                        echo "register gagal";
                    }
                }
            }
        }
        ?>
    </form>
</body>
</html>
