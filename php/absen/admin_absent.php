<?php
include('database.php');

$absent = false;
$classabsent = isset($_POST['classabsent']) ? $_POST['classabsent'] : '';

if(isset($_POST['classabsent'])){
    // Mereset nama dan status absen jika kelas yang dipilih berbeda
    // Reset the name and absence status if the selected class is different
    if(isset($_POST['difclassabsent']) && $_POST['difclassabsent'] !== $_POST['classabsent']){
        $name = '';
        $absencestatus = '';
    }else{
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $absencestatus = isset($_POST['absencestatus']) ? $_POST['absencestatus'] : '';
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Memasukan data absen
    // Insert absence data
    $absent = true;
    $checksql = "SELECT * FROM absences WHERE class = '$classabsent' AND name = '$name'";
    $checksqlresult = $db->query($checksql);

    if($checksqlresult->num_rows > 0){
        echo "kamu sudah absen";
    }else{
        if(isset($_POST['submit']) && $classabsent && $name && $absencestatus){
            $sql = "INSERT INTO absences (class, name, absencestatus) VALUES ('$classabsent', '$name', '$absencestatus')";
            $db->query($sql);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}
// Mengecek udah absen apa belom
// Check if you are absent or not
$namaaa = [];
if($classabsent){
    if($classabsent == 'Class A'){
        $namaaa = ['Cole Palmer', 'Enzo Fernandez', 'Moises Caicedo'];
    }elseif($classabsent == 'Class B'){
        $namaaa = ['Mykhailo Mudryk', 'Pedro Neto', 'Noni Madueke'];
    }elseif($classabsent == 'Class C'){
        $namaaa = ['Reece James', 'Malo Gusto', 'Marc Cucurella'];
    }

    // Mengecek dan memastikan data yang sudah absen
    // Check and confirm missing data
    $checkabsencessql = "SELECT name FROM absences WHERE class = '$classabsent'";
    $checkabsencessqlresult = $db->query($checkabsencessql);
    $checkabsencessql = [];

    // Mengambil nama nama yang sudah absen
    // Retrieves names that are absent
    while($row = $checkabsencessqlresult->fetch_assoc()){
        $checkabsencessql[] = $row['name'];
    }

    // Menghilangkan nama yang sudah absen dengan menyamakan data di database dengan nama di $namaaa
    // Remove names that are already absent by equating the data in the database with the names in $namaaa 
    $namaaa = array_diff($namaaa, $checkabsencessql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absent</title>
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
        background-color: #424242;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-radius: 5px;
        height: 320px;
        width: 450px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    select, input{
        width: 100%;
        padding: 10px;
        margin: 10px;
        border: none;
        border-radius: 5px;
        background-color: #616161;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s;
    }
    select:focus, input:hover{
        background-color: #757575;
    }

    option{
        background-color: #3e8e41;
        color: #ffffff;
    }
    a{
        text-decoration: none;
        color: #ffffff;
        margin-top: 20px;
        transition: all 0.3s;
    }
    a:hover{
        color: #ffeb3b; 
    }
</style>
</head>
<body>
    <form action="admin_absent.php" method="POST">
        <input type="hidden" name="difclassabsent" value="<?php echo $classabsent;?>"> 
        <select name="classabsent" id="kelas" required onchange="this.form.submit()">
            <option value="Class" disabled selected hidden>Class</option>
            <option value="Class A" <?php if($classabsent == 'Class A') echo 'selected';?>>Class A</option>
            <option value="Class B" <?php if($classabsent == 'Class B') echo 'selected';?>>Class B</option>
            <option value="Class C" <?php if($classabsent == 'Class C') echo 'selected';?>>Class C</option>
        </select>

        <?php 
        if($absent && $classabsent){
            echo '<select name="name" id="name" required onchange="this.form.submit();">';
            echo '<option value="YourName" disabled selected hidden>Your name</option>';
            foreach($namaaa as $namaa){
                echo '<option value="' . $namaa . '"' . ($name == $namaa ? ' selected' : '') . '>' . $namaa . '</option>';
            }
            echo '</select>';
            
            if($name){
                echo '<select name="absencestatus" id="absencestatus" required onchange="this.form.submit();">';
                echo '<option value="" disabled selected hidden>Absence status</option>';
                echo '<option value="Present"' . ($absencestatus == 'Present' ? ' selected' : '') . '>Present</option>';
                echo '<option value="Sick"' . ($absencestatus == 'Sick' ? ' selected' : '') . '>Sick</option>';
                echo '<option value="Excused"' . ($absencestatus == 'Excused' ? ' selected' : '') . '>Excused</option>';
                echo '</select>';
            }
            if($absencestatus){
                echo '<input type="submit" name="submit" value="Absent">';
            }
        }
        ?>
    <a href="admin_absent.php">Reset</a>
    <a href="admin_absentrecords.php">View Absences</a>
    </form>
</body>
</html>
