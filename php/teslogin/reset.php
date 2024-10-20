<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
    .input-group input.has-value + label {
        top: -5px;
        font-size: 11px;
        color: #3e8e41;
    }
    .reset{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s, font-size 0.5s;
        width: 150px; 
    }
    .reset:hover{
        background-color: #3e8e41;
        font-size: larger;
        transition: font-size .5s;
    }
    .hehe{
        animation: rainbow 14s infinite;
        text-decoration: none;
    }
    @keyframes rainbow {
        0% {
            color: red;
        }
        14.28% {
            color: orange;
        }
        28.57% {
            color: yellow;
        }
        42.86% {
            color: green;
        }
        57.14% {
            color: blue;
        }
        71.43% {
            color: indigo;
        }
        85.71% {
            color: violet;
        }
        100% {
            color: red;
        }
    }
</style>
<body>
    <form action="reset.php" method="post">
        <h1>RESET PASSWORD</h1>
        <div class="container">
            <div class="input-group">
                <input type="email" class="input" name="email" autocomplete="off" required>
                <label for="input">Email</label>
            </div>
        </div>
        <div class="container">
            <div class="input-group">
                <input type="password" class="input" name="old_password" autocomplete="off" required>
                <label for="input">Old Password</label>
            </div>
        </div>
        <div class="container">
            <div class="input-group">
                <input type="password" class="input" name="new_password" autocomplete="off" required>
                <label for="input">New Password</label>
            </div>
        </div>
        <input type="submit" value="Reset" name="reset" class="reset"> 
        <br>
        <?php
        include("service/database.php");
        session_start();

        if (isset($_POST['reset'])) {
            $email = $_POST['email']; // Mengambil Email // Get Email
            $old_password = $_POST['old_password']; // Mengambil Password Lama // Get Old Password
            $new_password = $_POST['new_password']; // Mengambil Password Baru // Get New Password

            // Mengecek apa password lebih dari 8 kata atau tidak
            // Check whether the password is more than 8 words or not
            if (strlen($new_password) < 8) {
                echo "Password must be more than 8 characters.";
            } else {

                // Mengecek email dan password lama
                // Checking email and old password
                $sql = "SELECT * FROM users WHERE email = ?";
                $result = $db->prepare($sql);
                $result->bind_param("s", $email);
                $result->execute();
                $getresult = $result->get_result();

                if ($getresult->num_rows == 0) {
                    echo "account not found maybe you have to remember it first !";;
                } else {
                    $data = $getresult->fetch_assoc();

                    // Mengecek apakah password lama cocok
                    // Check if the old password matches
                    if (password_verify(($old_password), $data['password'])) {

                        // Mengecek apakah password baru sama dengan password lama
                        // Check if the new password is the same as the old password
                        if (strtolower($old_password) === strtolower($new_password)) {
                            echo "The new password cannot be the same as the old one";
                        } else {

                            // Hash password baru
                            // Hash the new password
                            $new_hash_password = password_hash($new_password, PASSWORD_DEFAULT);
                            
                            // Update password baru di database
                            // Update the new password in the database
                            $update_sql = "UPDATE users SET password = ? WHERE email = ?";
                            $update_result = $db->prepare($update_sql);
                            $update_result->bind_param("ss", $new_hash_password, $email);
                            $update_result->execute();
                    
                            // Mengecek apakah perubahan password berhasil
                            // Check if the update was successful
                            if ($update_result->affected_rows > 0) {
                                echo "password reset success";
                            } else {
                                echo "reset new password error";
                            }
                        }
                    } else {
                        echo "old password incorrect";
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
