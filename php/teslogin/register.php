<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" type="image/gif" >
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
        height: 450px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .input{
        width: 300px;
        height: 30px;
        font-size: 16px;
        outline: none;
        padding: 6px 16px;
        border: 1px solid rgba(0, 0, 0, 0.233);
        border-radius: 4px;
        gap: 10px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .input-group{
        position: relative;
        margin-bottom: 15px;
    }
    .input:focus{
        border-color: #3e8e41;
        box-shadow: 0 0 5px rgba(62, 142, 65, 0.7), 0 0 10px rgba(62, 142, 65, 0.5); 
    }
    .input-group label{
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
        border-radius: 5px; 
    }
    .input-group input:focus + label{
        top: -5px;
        color: #3e8e41;
        font-size: 11px;

    }
    .input-group input.has-value + label{
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
        animation: rainbow 14s infinite;
        text-decoration: none;
    }
    @keyframes rainbow{
        0%{
            color: red;
        }
        15%{
            color: orange;
        }
        30%{
            color: yellow;
        }
        45%{
            color: green;
        }
        60%{
            color: blue;
        }
        75%{
            color: violet;
        }
        100%{
            color: red;
        }
    }
    .succeed{
        color: green;
    }
    .error{
        color: red;
    }
</style>
<body>
    <form action="register.php" method="post">
        <h1>REGISTER</h1>
        <div class="container">
        <div class="input-group">
            <input type="text" class="input" name="profilename" autocomplete="off" required>
            <label for="input">Profile Name</label>
        </div>
        </div>
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
            $profilename = $_POST['profilename']; // Mengambil Profile Name // Get Profile Name
            $username = $_POST['username']; // Mengambil Username // Get Username
            $email = $_POST['email']; // Mengambil Email // Get Email
            $password = $_POST['password']; // Mengambil Password // Get Password 
            
            // Mengecek jika username mengandung spasi
            // Check if the username contains spaces
            if(strpos($username, ' ') !== false){
                echo '<span class="error">username cannot contain spaces</span>';

            // Mengecek jika username mengandung karakter ilegal/symbol
            // Check if the username contains illegal characters/symbols
            }elseif(preg_match('/[!@#$%^&*()+=<>?{}[\]\\|;:\'",]/', $username)){
                echo '<span class="error">username cannot contain illegal characters</span>';
            }else{
                // Mengecek jika password mengandung spasi
                // Check if the password contains spaces
                if(strpos($password, ' ') !== false){
                    echo '<span class="error">password cannot contain spaces</span>';

                // Mengecek jika password mengandung karakter ilegal/symbol
                // Check if the password contains illegal characters/symbols
                }elseif(preg_match('/[!@#$%^&*()+=<>?{}[\]\\|;:\'",]/', $password)){
                    echo '<span class="error">password cannot contain illegal characters</span>';
                }else{

                    // Mengecek apakah password lebih dari 8 karakter atau tidak 
                    // Check whether the password is more than 8 characters or not
                    if(strlen($password) < 8){
                        echo '<span class="error">password must be more than 8 characters</span>';
                    }else{

                        // Menyamarkan password jika sudah lebih dari 8 karakter
                        // Disguise the password if it has more than 8 characters
                        $hash_password = password_hash($password, PASSWORD_BCRYPT);
        
                        // Cek jika nama atau email sudah ada atau belum
                        // Check if the name or email already exists or not
                        $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
                        $result = $db->query($check_sql);
        
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            if(strtolower($row["username"]) == strtolower($username)){
                                echo '<span class="error">your name is already used</span>';
                            }elseif(strtolower($row["email"]) == strtolower($email)){
                                echo '<span class="error">your email is already used</span>';
                            }
                        }else{
                            // Memasukan data ke database
                            // Enter data into the database
                            $sql = "INSERT INTO users (username, profile_name, password, email) VALUES ('$username', '$profilename', '$hash_password', '$email')";
                            if($db->query($sql)){
                                echo '<span class="succeed">register succeed , you can <a href="login.php" class="hehe">Login</a> now !</span>';
                            }else{
                                echo '<span class="error">register failed</span>';
                            }
                        }
                    }
                }
            }
        }
        ?>
        <script>
        // Script agar saat input ada valuenya labelnya stay di atas
        // Script to make the label stay above when input has value
        const inputFields = document.querySelectorAll('.input-group input');
        inputFields.forEach(inputField => {
          inputField.addEventListener('input', () => {
            if(inputField.value.trim() !== '') {
              inputField.classList.add('has-value');
            }else{
                  inputField.classList.remove('has-value');
            }
          });
        });
        </script>
    </form>
</body>
</html>
