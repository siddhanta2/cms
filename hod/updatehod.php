<?php
include '../sql/config.php';

if (isset($_POST['ok'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $rel = $_POST['rel'];
    $cate = $_POST['cate'];
    $adhar = $_POST['adhar'];

    // Address
    $village = $_POST['village'];
    $post = $_POST['post'];
    $police = $_POST['police'];
    $dist = $_POST['dist'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    // Qualifications
    $degree = $_POST['degree'];
    $board = $_POST['board'];
    $pyear = $_POST['pyear'];
    $division = $_POST['division'];

    // Departmental
    $department = $_POST['department'];
    $status = 0;

    // Get the HOD ID
    $hod_id = $_POST['hod_id'];

    // Fetch old image
    $query = mysqli_query($conn, "SELECT `image` FROM `hod` WHERE `id` = '$hod_id'");
    $row = mysqli_fetch_assoc($query);
    $old_image = $row['image'];

    // Handle file upload
    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_image = "images/" . time() . '.' . $image_ext;

        // Delete old image
        if (file_exists($old_image)) {
            unlink($old_image);
        }

        // Move new image
        move_uploaded_file($image_tmp, $new_image);
        $image_sql = ", `image` = '$new_image'";
    } else {
        $image_sql = "";
    }

    // Update query
   echo $sql = mysqli_query($conn, "UPDATE hod SET `name` = '$name', `mobile` = '$mobile', `email` = '$email', `dob` = '$dob', `gender` = '$gender', `religion` = '$rel', `category` = '$cate', `adharno` = '$adhar', `village` = '$village', `post` = '$post', `police` = '$police', `dist` = '$dist', `state` = '$state', `pin` = '$pin', `degree` = '$degree', `board` = '$board', `pyear` = '$pyear', `divsion` = '$division', `department` = '$department', `status` = '$status' $image_sql WHERE id = '$hod_id'");

    if ($sql){
        header("Location: ../hod.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
