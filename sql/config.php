<?php
    $dbname = 'cms'; // 4
    $username = 'root'; // 2
    $password = ''; // 3
    $host = 'localhost'; //1

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        echo "Connection Error".mysqli_error($conn);
    }
?>