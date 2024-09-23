<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>buah apa yang kamu mau?</p>
        <input type="checkbox" id="buah1" name="buah[]" value="buah 1">
        <label for="buah1"> aku mau buah 1</label><br>
        <input type="checkbox" id="buah2" name="buah[]" value="buah 2">
        <label for="buah1"> aku mau buah 2</label><br>
        <input type="checkbox" id="buah3" name="buah[]" value="buah 3">
        <label for="buah1"> aku mau buah 3</label><br>
        <input type="submit" value="cek">
    </form>
    <?php 
    $buah = ["buah 1" => "pisang", "buah 2" => "semangka" , "buah 3" => "apel" ];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bbuah = $_POST['buah'];
        foreach ($bbuah as $b) {
            echo "$b : " . $buah[$b] . "<br>";
        }
    }
    ?>
</body>
</html>