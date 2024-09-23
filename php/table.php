<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
        body{
            background-color: wheat;
        }
        .judul{
            font-size: 2rem;
            text-align: center;
        }
        .form{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 500px;
            height: 335px;
            background-image: url(https://www.footballdatabase.eu/images/photos/players/2020-2021/a_155/155751.jpg);
            background-size: contain;
            background-repeat: no-repeat;  
            background-position: center;
        }
        .n1{
            margin-top: 100px;
        }
        span{
            background-color: white;
            padding: 5px;
        }
        .cek{
            margin-top: 50px;
            font-size: medium;
            border: none;
        }
        .cek:hover{
            transform: scale(1.2);
            transition: all 2ms;    
            -webkit-transition: all .2s;
            background-color: rgb(0, 49, 105);
            color: white;
            border: none;
        }
        .php{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            background-color: white;
            width: fit-content;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <p class="judul">Tabel Perkalian</p>
    <div class="form">
        <form method="post">
            <input type="number" name="n1" class="n1" min="1">
            <p style="font-size: larger;color:white;font-size:1.5rem;">~</p>
            <input type="number" name="n2" class="n2" min="1">
            <br>
            <input type="submit" value="cek" class="cek">
        </form>
    </div>
    <div class="php">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST["n1"];
    $m = $_POST["n2"];
    echo "<table border='1'>";
    for($i=$p;$i<=$m;$i++){
        echo "<tr>";
        for($j=$p;$j<=$m;$j++){
            echo "<td>" . ($i*$j)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>