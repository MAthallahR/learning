<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>jenis apakah kamu?</p>
        <input type="submit" id="hewan 1"  name="hewan[]" value="monyet">
        <input type="submit" id="hewan 2"  name="hewan[]" value="kera">
        <input type="submit" id="hewan 3"  name="hewan[]" value="orang utan">
    </form>
    <?php 
    $hewan = ["monyet","kera","orang utan"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hhewan = $_POST['hewan'];
        foreach ($hhewan as $h) {
            if($h == "monyet"){
                echo "kamu adalah ".$hewan[0];
                echo "<br>";
            }
            elseif($h == "kera"){
                echo "kamu adalah ".$hewan[1];
                echo "<br>";
            }
            else{
                echo "kamu adalah ".$hewan[2];
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>