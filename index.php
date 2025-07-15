<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="admin">
                        <div class="d-block text-center pt-3">
                            <img src="img/user.png" alt="user" height="80px" width="80px">
                            <h4 class="pt-1">Admin Panel</h4>
                            
                            <a href="login.php?search=admin">Login</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="admin">
                        <div class="d-block text-center pt-3">
                            <img src="img/end-user.png" alt="user" height="80px" width="80px">
                            <h4 class="pt-1">HOD Panel</h4>
                            
                            <a href="login.php?search=hod" style="background-color: #FCC737;">Login</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="admin">
                        <div class="d-block text-center pt-3">
                            <img src="img/password.png" alt="user" height="80px" width="80px">
                            <h4 class="pt-1">Teacher Panel</h4>
                            
                            <a href="login.php?search=teachers" style="background-color: #08C2FF;">Login</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="admin">
                        <div class="d-block text-center pt-3">
                            <img src="img/passwordstd.png" alt="user" height="80px" width="80px">
                            <h4 class="pt-1">Student Panel</h4>
                            
                            <a href="login.php?search=students" style="background-color: #00FF9C;">Login</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-5">
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="admin">
                        <div class="d-block text-center pt-3">
                            <img src="img/login.png" alt="user" height="80px" width="80px">
                            <h4 class="pt-1">Accountant Panel</h4>
                            
                            <a href="login.php?search=accountant" style="background-color: #B8001F;">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>