<?php
include 'database.php';

if(isset($_POST['id'])){
    $id = $_POST['id']; 

    $sql = $db->prepare("DELETE FROM absences WHERE id = ?");
    $sql->bind_param("i", $id);

    if($sql->execute()){
        echo "data successfully deleted";
        header("Location: admin_absentrecords.php"); 
        exit();
    }else{
        echo "Error: " . $sql->error;
    }
}
?>