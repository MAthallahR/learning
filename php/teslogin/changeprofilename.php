<?php 
session_start();
if (!isset($_SESSION['profile_name'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Name</title>
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
        height: 265px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    form:hover{
        transform: scale(1.02);
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
    .change{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.1s;
        width: 150px; 
    }
    .change:hover{
        background-color: #3e8e41;
        transform: translateY(-2px);
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
    <form action="changeprofilename.php" method="post">
        <h1 style="font-family: Arial, sans-serif;">CHANGE PROFILE NAME</h1>
        <p style="margin-top: -10px;"> Your Profile Name Right Now : <?= $_SESSION['profile_name'] ?></p>
        <div class="container">
            <div class="input-group">
                <input type="text" class="input" name="new_name" autocomplete="off" required>
                <label for="input">New Name</label>
            </div>
        </div>
        <input type="submit" value="Change" name="change" class="change"> 
        <br>
        <?php
        include("service/database.php");
        if(isset($_POST['change'])){
            $new_name = $_POST['new_name']; // Mengambil Nama Baru // Get New Name

            // Mengecek nama profile di database
            // Checking profile name in databse
            $sql = "SELECT * FROM users WHERE profile_name = ?";
            $result = $db->prepare($sql);
            $result = $result->execute(['$new_name']);
            
            // Mengecek apakah nama baru sama dengan password lama
            // Check if the new name is the same as the old name
            if(strtolower($_SESSION['profile_name']) === strtolower($new_name)){
                echo '<span class="error">the name cannot be the same as the old one</span>';
            }else{

                // Update nama baru di database
                // Update the new name in the database
                $update_sql = "UPDATE users SET profile_name = ? WHERE profile_name = ?";
                $update_result = $db->prepare($update_sql);
                $update_result->execute([$new_name, $_SESSION['profile_name']]);

                // Mengecek apakah perubahan nama berhasil
                // Check if the update was successful
                if($update_result->affected_rows > 0){
                    echo '<span class="succeed">profile name changed successfully</span>';
                    $_SESSION['profile_name'] = $new_name;
                }else{
                    echo '<span class="error">profile name changed error</span>';
                }
            }
        }
        ?>
        <p><a href="dashboard.php" class="hehe">back</a></p>
        <script>
        // Script agar saat input ada valuenya stay di atas
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
