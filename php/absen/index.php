<?php
    session_start();
    include("database.php");
    if (isset($_POST['login'])) {
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE password='$password'";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $_SESSION["password"] = $data["password"];
            if($data['password'] === 'admin'){ // passwordnya admin
                header('location: admin_dashboard.php');
                exit(); 
            }
        }else{
            $error = '<span class="error">password incorrect</span>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        height: 300px;
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
        margin-left: 115px;
        margin-top: 25px;
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
        transition: all 0.3s ease;
    }
    .ingput{
        position: relative;
        margin-bottom: 15px;
    }
    .input:focus{
        border-color: #3e8e41;
        animation: bayangan 2s infinite; 
    }
    @keyframes bayangan{
        0%{
            box-shadow: 0 0 5px rgba(62, 142, 65, 0.7), 0 0 10px rgba(62, 142, 65, 0.5);
        }
        50%{
            box-shadow: 0 0 15px rgba(62, 142, 65, 0.9), 0 0 20px rgba(62, 142, 65, 0.7);
        }
        100%{
            box-shadow: 0 0 5px rgba(62, 142, 65, 0.7), 0 0 10px rgba(62, 142, 65, 0.5);
        }
    }
    .ingput label{
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
    .ingput input:focus + label{
        top: -5px;
        color: #3e8e41;
        font-size: 11px;
    }
    .ingput input.has-value + label{
        top: -5px;
        font-size: 11px;
        color: #3e8e41;
    }
    .login{
        background-color: #4CAF50;
        margin-top: 15px;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.5s;
        width: 150px; 
    }
    .login:hover{
        background-color: #3e8e41;
        transform: translateY(-2px);
    }
    button{
        background-color: #51eefc;
        height: 40px;
        width: 100px; 
        margin: 20px;
        border: none;
        border-radius: 5px;;
        transition: all 0.3s;
        cursor: pointer;
    }
    button:hover{
        background: #1269cc;
        transform: scale(1.05);
        box-shadow: 0 0 5px #51eefc, 0 0 10px #51eefc; 
        animation: w 1.5s infinite;
    }
    @keyframes w{
        0%{
            box-shadow: 0 0 10px #51eefc, 0 0 20px #51eefc;
        }
        50%{
            box-shadow: 0 0 30px #51eefc, 0 0 40px #51eefc;
        }
        100%{
            box-shadow: 0 0 10px #51eefc, 0 0 20px #51eefc;
        }
    }
    .text{
        color: #1269cc;
        font-weight: bold;
        text-align: center;
    }
    button:hover .text{
        color: #51eefc;
    }
    .error{
        margin-top: 20px;
        color: red;
    }
    .animasi{
    animation: fadein 0.5s ease forwards;
    }
    @keyframes fadein{
        from{   
            transform: translateY(-55px);
        }
        to{
            transform: translateY(0);
        }
    }
</style>
<body>
    <form action="index.php" method="post" id="form">
    <h1 style="font-family: Arial, sans-serif;">LOGIN AS?</h1>
    <button type="button" onclick="user()"><p class="text">User</p></button>
    <button type="button" onclick="admin()"><p class="text">Admin</p></button>

    <div class="container" id="password" style="display:none;">
        <div class="ingput">
            <input type="password" class="input" name="password" autocomplete="off" required>
            <label for="input">Password</label>
        </div>
    </div>
    <input type="submit" value="Login" name="login" class="login" id="login" style="display:none;"> 
    <?php 
    if(isset($error)){
        echo $error;
    } 
    ?>
</form>
<script>
    const inputFields = document.querySelectorAll('.ingput input');
    inputFields.forEach(inputField => {
        inputField.addEventListener('input', () => {
            if(inputField.value.trim() !== ''){
                inputField.classList.add('has-value');
            }else{
                inputField.classList.remove('has-value');
            }
        });
    });
    function user(){
        window.location.href = 'user_dashboard.php';
    }
    function admin(){
        const password = document.getElementById('password');
        const login = document.getElementById('login');
        const form = document.getElementById('form'); 
        
        if(password.style.display === 'none' || password.style.display === ''){
            password.style.display = 'block'; 
            login.style.display = 'block'; 
            password.classList.add('animasi'); 
            login.classList.add('animasi'); 
            form.style.height = '400px';
        }else{
            password.style.display = 'none'; 
            login.style.display = 'none'; 
            form.style.height = '300px';
        }
    }
</script>
</body>
</html>
