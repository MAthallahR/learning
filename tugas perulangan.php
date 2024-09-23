<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        silahkan pilih angka
        <br>
        <input type="number" name="n1" class="n1" min="1">
        <br>
        <input type="number" name="n2" class="n2" min="1">
        <br>
        <input type="submit" value="cek" class="cek">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST["n1"];
        $m = $_POST["n2"];
        for($i=$p;$i<=$m;$i++){
        echo $i . " ";
        }
    }
    ?>
</body>
</html>