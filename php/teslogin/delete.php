<?php
session_start();
if (!isset($_SESSION['profile_name'])) {
    header("Location: login.php");
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
    }
    .button{
        display: flex;
        gap: 100px;
    }
    .delete {
        background-color: #f44336;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s, font-size 0.5s;
        width: 150px;
    }
    .delete:hover{
        background-color: #d32f2f;
        font-size: larger;
        transition: font-size .5s;
    }
    .cancel{
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s, font-size 0.5s;
        width: 150px;
    }
    .cancel:hover {
        background-color: #3e8e41;
        font-size: larger;
        transition: font-size .5s;
    }
    .succeed {
        color: green;
    }
    .error {
        color: red;
    }
</style>
<body>
    <form action="delete.php" method="post">
        <h1>DELETE ACCOUNT</h1>
        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
        <div class="button">
            <input type="submit" value="Yes" class="delete" name="delete" onclick="return confirm('Aare you sure you want to delete your account?')"></input>
            <input type="submit" value="No" class="cancel" onclick="window.location.href='dashboard.php'"></input>
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
                echo '<span class="succeed">Account deleted successfully</span>';
                session_destroy();
                header("Location: dashboard.php");
                exit();
            } else {
                echo '<span class="error">Account deletion failed</span>';
            }
        } 
        ?>
    </form>
    <script>
        // Script agar saat input ada valuenya stay di atas
        // Script to make the label stay above when input has value
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
</body>
</html>
