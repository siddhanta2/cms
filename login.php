<?php
include 'sql/config.php';
if(isset($_GET['search'])){
    $search = $_GET['search'];
} else {
    header('Location: index.php');
}
$invalidpass = $invalid_user = false;
if(isset($_POST['ok'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $ifexist = mysqli_query($conn, "SELECT * FROM `$search` WHERE `email` = '$email'");
    if(mysqli_num_rows($ifexist) > 0){
        $row = mysqli_fetch_assoc($ifexist);
        if(password_verify($pass, $row['password'])) {
            session_start();
            $_SESSION['user'] = $row['email'];
            header("Location: panel/{$search}_panel.php");
            exit();
        } else {
            $invalidpass = true;
        }
    } else {
        $invalid_user = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <style>
        body{
            background-color: #FF748B;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <form method="POST">
                        <div class="login-form p-3">
                        <?php
                    if($invalid_user){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Invalid User!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                    }
                    if($invalidpass){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Invalid Password!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                    }
                    ?>
                            <div class="login-img d-block text-center pt-3">
                                <img src="img/access.png" alt="access" height="100px" width="100px">
                                <h4 class="pt-3">Login</h4>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Username <sup><span style="color:red;">*</span></sup></label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password <sup><span style="color:red;">*</span></sup></label>
                                <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" required>
                            </div>

                            <div class="d-block text-center">
                                <button type="submit" name="ok">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>