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
    <title>Delete Account</title>
    <link rel="icon" href="https://media.tenor.com/s45HmDEGbUsAAAAj/3d-monkey-monkey-eating.gif" type="image/gif">
</head>
<style>
    body {
        background-color: #303030;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    form {
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-radius: 5px;
        height: 420px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    form:hover{
        transform: scale(1.02);
    }
    .button{
        display: flex;
        justify-content: space-between;
        gap: 40px;
        margin-top: 20px;
    }
    .delete{
        background-color: #f44336;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s;
        width: 150px;
    }
    .delete:hover{
        background-color: #d32f2f;
        transform: translateY(-2px);
    }
    .cancel{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.1s;
        width: 150px;
    }
    .cancel:hover{
        background-color: #3e8e41;
        transform: translateY(-2px);
    }
    .succeed{
        color: green;
    }
    .error{
        color: red;
    }
</style>
<body>
    <form action="delete.php" method="post">
        <h1 style="font-family: Arial, sans-serif;">DELETING YOUR ACCOUNT</h1>
        <p style="margin-top: -10px;"> Are You Sure?</p>
        <img src="https://media.tenor.com/zdtL9ixDfCwAAAAM/ishowspeed-try-not-to-laugh.gif" height="250" width="250" alt=""> 
        <div class="button">
            <input type="submit" value="Yes" class="delete" name="delete" onclick="return confirm('are you sure you want to delete your account?')"></input>
            <button type="button" class="cancel" onclick="window.location.href='dashboard.php'">No</button>   
        </div>    
        <?php
        include("service/database.php");

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
            $profile_name = $_SESSION['profile_name'];
        
            // Kode untuk menghapus akun
            // Code to delete account
            $delete_sql = "DELETE FROM users WHERE profile_name = '$profile_name'";
            $delete_result = $db->prepare($delete_sql);
            $delete_result->execute();
        
            // Check if the account deletion was successful
            // Mengecek jika akun  berhasil dihapus
            if ($delete_result->affected_rows > 0) {
                echo '<span class="succeed">account deleted successfully</span>';
                session_destroy();
                header("Location: dashboard.php");
                exit();
            } else {
                echo '<span class="error">account deletion failed</span>';
            }
        } 
        ?>
    </form>
</body>
</html>
