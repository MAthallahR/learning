<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        apa kamu suka pisang?
        <br>
        <input type="submit" name="pilihan" value="ya">
        <input type="submit" name="pilihan" value="tidak">
    </form>
    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['pilihan'] == "ya"){
        echo "kamu suka pisang";
    }
    else{
        echo "kamu tidak suka pisang";
    }
 }
    ?>
</body>
</html>