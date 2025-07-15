<?php
    include 'include/header.php';
    include ('include/sidebar.php');
    include 'include/top-header.php';
?>

<?php
    include 'sql/config.php';
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM `teachers` WHERE id = '$id'") or mysqli_error($conn);
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_array($sql);
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 pt-3">
            <h2>Dashboard <span class="float-right" style="font-size: 14px; line-height: 45px;"><a href="dashboard.php" class="mr-1">Home</a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span><span class="ml-2">Add Teacher Form</span></span></h2><hr>
        </div>
    </div>

    <form action="teacher/updateteacher.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="row">
            <div class="col-12">
                <div class="hod-card-form1">
                    <h6>Personal Details</h6><hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name </label>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile No </label>
                                <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth </label>
                                <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                    <?php
                                        if($row['gender'] == 'male'){
                                    ?>
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    <?php
                                        }else if($row['gender'] == 'female'){
                                    ?>
                                        <option value="male">Male</option>
                                        <option value="female" selected>Female</option>
                                        <option value="other">Other</option>
                                    <?php
                                        }else{
                                    ?>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other" selected>Other</option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion</label>
                                <select class="form-control" name="rel" id="exampleFormControlSelect1">
                                    <?php
                                        if($row['religion'] == 'hindu'){
                                    ?>
                                        <option value="hindu" selected>Hindu</option>
                                        <option value="islam">Islam</option>
                                        <option value="sikh">Sikh</option>
                                        <option value="other">Other</option>
                                    <?php
                                        }else if($row['religion'] == 'islam'){
                                    ?>
                                        <option value="hindu">Hindu</option>
                                        <option value="islam" selected>Islam</option>
                                        <option value="sikh">Sikh</option>
                                        <option value="other">Other</option>
                                    <?php
                                        }else if($row['religion'] == 'sikh'){
                                    ?>
                                        <option value="hindu">Hindu</option>
                                        <option value="islam">Islam</option>
                                        <option value="sikh" selected>Sikh</option>
                                        <option value="other">Other</option>
                                    <?php
                                        }else{
                                    ?>
                                        <option value="hindu">Hindu</option>
                                        <option value="islam">Islam</option>
                                        <option value="sikh">Sikh</option>
                                        <option value="other" selected>Other</option>
                                    <?php
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-control" name="cate" id="exampleFormControlSelect1">
                                    <?php
                                        if($row['category'] == 'sc/st'){
                                    ?>
                                        <option value="sc/st" selected>SC / ST</option>
                                        <option value="OBC">OBC</option>
                                        <option value="EBC">EBC</option>
                                        <option value="general">General</option>
                                    <?php
                                        }else if($row['category'] == 'OBC'){
                                    ?>
                                        <option value="sc/st">SC / ST</option>
                                        <option value="OBC" selected>OBC</option>
                                        <option value="EBC">EBC</option>
                                        <option value="general">General</option>
                                    <?php
                                        }else if($row['category'] == 'EBC'){
                                    ?>
                                        <option value="sc/st">SC / ST</option>
                                        <option value="OBC">OBC</option>
                                        <option value="EBC" selected>EBC</option>
                                        <option value="general">General</option>
                                    <?php
                                        }else{
                                    ?>
                                        <option value="sc/st">SC / ST</option>
                                        <option value="OBC">OBC</option>
                                        <option value="EBC">EBC</option>
                                        <option value="general" selected>General</option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Aadhar No</label>
                                <input type="text" name="adhar" value="<?php echo $row['adharno']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" accept=".jpg, .png">
                                <p class="mt-2">old Image</p>
                                <img src="teacher/images/<?php echo $row['image']; ?>" alt="" class="img-thumbnail" height="70px" width="70px">
                            </div>
                        </div>
                    </div>
                
                    <!--address section-->
                    <h6 class="pt-2"> Address</h6><hr>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Village</label>
                                <input type="text" name="village" value="<?php echo $row['village']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Office</label>
                                <input type="text" name="post" value="<?php echo $row['post']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Police Station</label>
                                <input type="text" name="police" value="<?php echo $row['police']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">District</label>
                                <input type="text" name="dist" value="<?php echo $row['dist']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">State <sup><span style="color: red;">*</span></sup></label>
                                <select class="form-control" name="state" id="exampleFormControlSelect1" required>
                                    <option disabled selected value="">--Select State--</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pin Code</label>
                                <input type="text" name="pin" value="<?php echo $row['pin']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <h6 class="pt-2"> Educational Details</h6><hr>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Degree / Course</label>
                                <input type="text" name="degree" value="<?php echo $row['degree']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Board / University</label>
                                <input type="text" name="board" value="<?php echo $row['board']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passing Year</label>
                                <input type="text" name="pyear" value="<?php echo $row['pyear']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Division / Grade</label>
                                <input type="text" name="division" value="<?php echo $row['divsion']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <h6 class="pt-2"> Departmential Details</h6><hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Department</label>
                                <input type="text" name="department" value="<?php echo $row['department']; ?>" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-block float-right">
                                <input type="submit" name="ok" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
    include 'include/footer.php';
?>