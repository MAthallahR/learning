<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        height: 400px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .input {
        width: 300px;
        height: 30px;
        font-size: 16px;
        outline: none;
        padding: 6px 16px;
        border: 1px solid rgba(0, 0, 0, 0.233);
        border-radius: 4px;
        gap: 10px;
    }
    .input-group {
        position: relative;
        margin-bottom: 15px
    }
    .input-group .input:focus {
        border-color: #3e8e41;
    }
    .input-group label {
        position: absolute;
        cursor: text;
        user-select: none;
        pointer-events: none; 
        top: 14px;
        left: 10px;
        font-size: 12px;
        font-weight: bold;
        background: #fff;
        padding: 0 5px;
        color: #999;
        transition: all .3s ease;
    }
    .input-group input:focus + label {
        top: -5px;
        color: #3e8e41;
        font-size: 11px;
    }
    .input-group input.has-value + label {
        top: -5px;
        font-size: 11px;
    }
    .input-group input.has-value {
        border-color: #3e8e41;
    }
    .input-group input.has-value + label {
        top: -5px;
        font-size: 11px;
        color: #3e8e41;
    }
    .register{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s, font-size 0.5s;
        width: 150px; 
    }
    .register:hover{
        background-color: #3e8e41;
        font-size: larger;
        transition: font-size .5s;
    }
    .hehe{
        background: linear-gradient(90deg, red, orange, yellow, green, blue, purple);
        background-size: 400px 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rainbow 2s infinite;
    }
    @keyframes rainbow {
        0% {
            background-position: 0% 50%;
        }
        100% {
            background-position: 100% 50%;
        }
    }
</style>
<body>
    <form action="register.php" method="post">
        <h1>REGISTER</h1>
        <div class="container">
        <div class="input-group">
            <input type="text" class="input" name="username" autocomplete="off" required>
            <label for="input">Username</label>
          </div>
        </div>
        <div class="container">
        <div class="input-group">
            <input type="email" class="input" name="email" autocomplete="off" required>
            <label for="input">Email</label>
          </div>
        </div>
        <div class="container">
        <div class="input-group">
            <input type="password" class="input" name="password" autocomplete="off" required>
            <label for="input">Password</label>
          </div>
        </div>
        <input type="submit" value="Register" name="register" class="register"> 
        <p>already have an account? <a href="login.php" class="hehe">Login</a></p>
        <?php
        include("service/database.php");
        if(isset($_POST['register'])){
            $username = $_POST['username']; // Mengambil Username // Get Username
            $email = $_POST['email']; // Mengambil Email // Get Email
            $password = $_POST['password']; // Mengambil Password // Get Password 

            // Mengecek apakah password lebih dari 8 kata atau tidak 
            // Check whether the password is more than 8 words or not
            if (strlen($password) < 8) {
                echo "password must be more than 8 words";
            } else {
                // Menyamarkan password jika sudah lebih dari 8 kata (kenapa harus disamarkan? karena function password_verify di login hanya bekerja jika di samarkan :D ) 
                //Disguise the password if it has more than 8 words (why does it have to be disguised? because the password_verify function at login only works if it is disguised :D )
                $hash_password = password_hash($password, PASSWORD_BCRYPT);

                // Cek jika nama atau email sudah ada atau belum
                // Check if the name or email already exists or not
                $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
                $result = $db->query($check_sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if ($row["username"] == $username) {
                        echo "your name is already used";
                    } elseif ($row["email"] == $email) {
                        echo "your email is already used";
                    }
                } else {
                    // Memasukan data ke database
                    // Enter data into the database
                    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hash_password', '$email')";
                    if ($db->query($sql)) {
                        echo "register succeed , you can login!";
                    } else {
                        echo "register failed";
                    }
                }
            }
        }
        ?>
        <script>
        const inputFields = document.querySelectorAll('.input-group input');
        inputFields.forEach(inputField => {
          inputField.addEventListener('input', () => {
            if (inputField.value.trim() !== '') {
              inputField.classList.add('has-value');
            } else {
                  inputField.classList.remove('has-value');
            }
          });
        });
        </script>
    </form>
</body>
</html>
