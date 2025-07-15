<?php
    include '../sql/config.php';
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM teachers WHERE id = '$id'") or die($conn);
    if($sql == TRUE){
        header("Location: ../teacher.php");
    }else{
        echo "Error While Deleting Data". mysqli_error($conn);
    }
?>