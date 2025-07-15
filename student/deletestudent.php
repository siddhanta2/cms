<?php
    include '../sql/config.php';
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM students WHERE id = '$id'") or die($conn);
    if($sql){
        header("Location: ../student.php");
    }else{
        echo "Error While Deleting Data". mysqli_error($conn);
    }
?>