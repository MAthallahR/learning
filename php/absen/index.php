<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
</head>
<body>
    <form action="index.php" method="POST">
    <input type="hidden" name="difclassabsent" value="<?php echo isset($_POST['classabsent']) ? $_POST['classabsent'] : ''; ?>"> 
        <select name="classabsent" id="kelas" required onchange="this.form.submit()">
            <option value="Class" disabled selected hidden>Class</option>
            <option value="Class A" <?php if(isset($_POST['classabsent']) && $_POST['classabsent'] == 'Class A') echo 'selected'; ?>>Class A</option>
            <option value="Class B" <?php if(isset($_POST['classabsent']) && $_POST['classabsent'] == 'Class B') echo 'selected'; ?>>Class B</option>
            <option value="Class C" <?php if(isset($_POST['classabsent']) && $_POST['classabsent'] == 'Class C') echo 'selected'; ?>>Class C</option>
        </select>
        <?php 
        include('database.php');
        if(isset($_POST['classabsent'])){
            
            // kode untuk mereset nama dan status absen jika memilih kelas yang berbeda
            // code for  reset name and status absent if select different class
            if(isset($_POST['difclassabsent']) && $_POST['difclassabsent'] !== $_POST['classabsent']){
                $name = '';
                $absencestatus = '';
            }else{
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $absencestatus = isset($_POST['absencestatus']) ? $_POST['absencestatus'] : '';
                $classabsent = $_POST['classabsent'];

            }
            echo '<select name="name" id="name" required onchange="this.form.submit();">';
            echo '<option value="YourName" disabled selected hidden>Your name</option>';
            
            if($_POST['classabsent'] == 'Class A'){
                echo '<option value="Cole Palmer"' . ($name == 'Cole Palmer' ? 'selected' : '') . '>Cole Palmer</option>';
                echo '<option value="Enzo Fernandez"' . ($name == 'Enzo Fernandez' ? 'selected' : '') . '>Enzo Fernandez</option>';
                echo '<option value="Moises Caicedo"' . ($name == 'Moises Caicedo' ? 'selected' : '') . '>Moises Caicedo</option>';
            }elseif($_POST['classabsent'] == 'Class B'){
                echo '<option value="Mykhailo Mudryk"' . ($name == 'Mykhailo Mudryk' ? 'selected' : '') . '>Mykhailo Mudryk</option>';
                echo '<option value="Pedro Neto"' . ($name == 'Pedro Neto' ? 'selected' : '') . '>Pedro Neto</option>';
                echo '<option value="Noni Madueke"' . ($name == 'Noni Madueke' ? 'selected' : '') . '>Noni Madueke</option>';
            }elseif($_POST['classabsent'] == 'Class C'){
                echo '<option value="Reece James"' . ($name == 'Reece James' ? 'selected' : '') . '>Reece James</option>';
                echo '<option value="Malo Gusto"' . ($name == 'Malo Gusto' ? 'selected' : '') . '>Malo Gusto</option>';
                echo '<option value="Marc Cucurella"' . ($name == 'Marc Cucurella' ? 'selected' : '') . '>Marc Cucurella</option>';
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
                if(isset($_POST['submit']) && $classabsent && $name && $absencestatus){
                $sql = "INSERT INTO absences (class, name, absencestatus) VALUES ('$classabsent', '$name', '$absencestatus')";
                $db->query($sql);
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
                }
            }
        }
        ?>
    </form>
</body>
</html>
