<?php
include '../sql/config.php';

if (isset($_POST['ok'])) {
    // Secure Input
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $rel = mysqli_real_escape_string($conn, $_POST['rel']);
    $cate = mysqli_real_escape_string($conn, $_POST['cate']);
    $adhar = mysqli_real_escape_string($conn, $_POST['adhar']); // Fixed variable name
    $village = mysqli_real_escape_string($conn, $_POST['village']);
    $post = mysqli_real_escape_string($conn, $_POST['post']);
    $police = mysqli_real_escape_string($conn, $_POST['police']);
    $dist = mysqli_real_escape_string($conn, $_POST['dist']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $board = mysqli_real_escape_string($conn, $_POST['board']);
    $pyear = mysqli_real_escape_string($conn, $_POST['pyear']);
    $division = mysqli_real_escape_string($conn, $_POST['division']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
    $admission = mysqli_real_escape_string($conn, $_POST['admission']);

    $image = $_FILES['image']['name'];
    $image_sql = "";

    // Handle File Upload if Image is Provided
    if (!empty($image)) {
        $image_path = "images/" . basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
            $image_sql = ", `image` = '$image'";
        } else {
            echo "Error uploading image.";
            exit;
        }
    }

    // Construct SQL Query
    $sql = "UPDATE `students` SET 
            `name`='$name', 
            `mobile`='$mobile', 
            `email`='$email', 
            `dob`='$dob', 
            `gender`='$gender', 
            `religion`='$rel', 
            `category`='$cate', 
            `adharno`='$adhar', 
            `village`='$village', 
            `post`='$post', 
            `police`='$police', 
            `dist`='$dist', 
            `state`='$state', 
            `pin`='$pin', 
            `degree`='$degree', 
            `board`='$board', 
            `pyear`='$pyear', 
            `divsion`='$division', 
            `department`='$department',
            `roll_number`='$rollno', 
            `admission_date`='$admission'
            $image_sql
            WHERE `id` = '$id'";

    // Execute Query
    if (mysqli_query($conn, $sql)) {
        header("Location: ../student.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>