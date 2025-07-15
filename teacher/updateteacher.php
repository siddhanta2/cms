<?php
    include '../sql/config.php';
    if(isset($_POST['ok'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $rel = $_POST['rel'];
        $cate = $_POST['cate'];
        $adhar = $_POST['adhar'];
        $village = $_POST['village'];
        $post = $_POST['post'];
        $police = $_POST['police'];
        $dist = $_POST['dist'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        $degree = $_POST['degree'];
        $board = $_POST['board'];
        $pyear = $_POST['pyear'];
        $division = $_POST['division'];
        $department = $_POST['department'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);

        if(!empty($image)){
            $sql = mysqli_query($conn, "UPDATE teachers SET name='$name',mobile='$mobile',email='$email',dob='$dob',gender='$gender',religion='$rel',category='$cate',adharno='$adhar',village='$village',post='$post',police='$police',dist='$dist',state='$state',pin='$pin',degree='$degree',board='$board',pyear='$pyear',divsion='$division',department='$department', image='$image' WHERE id = '$id'") or mysqli_error($conn);
            if($sql == TRUE){
                echo "Updated";
            }else{
                echo "Error".mysqli_error($conn);
            }
        }else{
            $sql = mysqli_query($conn, "UPDATE teachers SET name='$name',mobile='$mobile',email='$email',dob='$dob',gender='$gender',religion='$rel',category='$cate',adharno='$adhar',village='$village',post='$post',police='$police',dist='$dist',state='$state',pin='$pin',degree='$degree',board='$board',pyear='$pyear',divsion='$division',department='$department' WHERE id = '$id'") or mysqli_error($conn);
            if($sql == TRUE){
                header("Location: ../teacher.php");
            }else{
                echo "Error".mysqli_error($conn);
            }
        }
    }

?>