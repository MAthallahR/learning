<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Absences</title>
</head>
<style>
    table{
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th{
        background-color: #f2f2f2;
    }
    th,td{
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    .present{
        background-color: #d4f9cc;
    }
    .sick{
        background-color: #fff88f;
    }
    .excused{
        background-color: #7ec4cf; 
    }
</style>
<body>

<h2 style="text-align: center;">Absence Records</h2>
<table>
    <tr>
         <th>No</th>
         <th>Class</th>
         <th>Name</th>
         <th>Absence Status</th>
         <th>Absent On</th>
     </tr>
        <?php
        include("database.php");
        $sql = "SELECT id, class, name, absencestatus, absent_on FROM absences";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $absencestatus = '';
                if($row['absencestatus'] == 'Present'){
                    $absencestatus = 'present';
                }elseif($row['absencestatus'] == 'Sick'){
                  $absencestatus = 'sick';
                }elseif($row['absencestatus'] == 'Excused'){
                    $absencestatus = 'excused';
                }
                echo "<tr class='$absencestatus'>
                        <td>{$row['id']}</td>
                        <td>{$row['class']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['absencestatus']}</td>
                        <td>{$row['absent_on']}</td>
                      </tr>";
            }
        }else{
            echo "<tr><td colspan='5'>no absence records</td></tr>";
        }
        ?>
</table>
<div style="display: flex; flex-direction: column; margin-left: 472px;">
    <div style="display: flex; align-items: center; margin: 5px;">
        <div style="background-color: #d4f9cc; width: 20px; height: 20px; margin-right: 5px; border:1.5px solid black;"></div>
        Present
    </div>
    <div style="display: flex; align-items: center; margin: 5px;">
        <div style="background-color: #fff88f; width: 20px; height: 20px; margin-right: 5px; border:1.5px solid black;"></div>
        Sick
    </div>
    <div style="display: flex; align-items: center; margin: 5px;">
        <div style="background-color: #7ec4cf; width: 20px; height: 20px; margin-right: 5px; border:1.5px solid black;"></div>
        Excused
    </div>
</div>
</body>
</html>