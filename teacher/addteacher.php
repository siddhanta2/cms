<?php
    include '../sql/config.php';
    if(isset($_POST['ok'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $rel = $_POST['rel'];
        $cate = $_POST['cate'];
        $adhar = $_POST['adhar'];

        // address
        $village = $_POST['village'];
        $post = $_POST['post'];
        $police = $_POST['police'];
        $dist = $_POST['dist'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];

        // qualifications
        $degree = $_POST['degree'];
        $board = $_POST['board'];
        $pyear = $_POST['pyear'];
        $division = $_POST['division'];

        // departemntal
        $department = $_POST['department'];
        $status = 0;
        $salary = $_POST['salary'];
        $joining = $_POST['joining'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);


        // image
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$_FILES['image']['name']);

        $sql = mysqli_query($conn, "INSERT INTO `teachers`(`name`, `mobile`, `email`, `dob`, `gender`, `religion`, `category`, `adharno`, `village`, `post`, `police`, `dist`, `state`, `pin`, `degree`, `board`, `pyear`, `divsion`, `department`, `salary`, `image`, `status`, `joining_date`, `password`)VALUES('$name', '$mobile', '$email', '$dob', '$gender', '$rel', '$cate', '$adhar', '$village', '$post', '$police', '$dist', '$state', '$pin', '$degree', '$board', '$pyear', '$division', '$department', '$salary', '$image', '$status', '$joining','$hash')") or mysqli_error($conn);
        if($sql == TRUE){
            header("Location: ../teacher.php");
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
?>

