<?php
    include 'include/header.php';
    include ('include/sidebar.php');
    include 'include/top-header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 pt-3">
            <h2>Dashboard <span class="float-right" style="font-size: 14px; line-height: 45px;"><a href="dashboard.php" class="mr-1">Home</a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span><span class="ml-2">Add Accountant  Form</span></span></h2><hr>
        </div>
    </div>

    <form action="addaccount.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="hod-card-form1">
                    <h6>Personal Details</h6><hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name *" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile No <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile No *" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth <sup><span style="color: red;">*</span></sup></label>
                                <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender <sup><span style="color: red;">*</span></sup></label>
                                <select class="form-control" name="gender" id="exampleFormControlSelect1" required>
                                    <option disabled selected value="">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion <sup><span style="color: red;">*</span></sup></label>
                                <select class="form-control" name="rel" id="exampleFormControlSelect1" required>
                                    <option disabled selected value="">--Select Religion--</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="islam">Islam</option>
                                    <option value="sikh">Sikh</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category <sup><span style="color: red;">*</span></sup></label>
                                <select class="form-control" name="cate" id="exampleFormControlSelect1" required>
                                    <option disabled selected value="">--Select Category--</option>
                                    <option value="sc/sc">SC / ST</option>
                                    <option value="OBC">OBC</option>
                                    <option value="EBC">EBC</option>
                                    <option value="general">General</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Aadhar No <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="adhar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eg - 1111 2222 3333" required>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image <sup><span style="color: red;">*</span></sup></label>
                                <input type="file" name="image" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" accept=".jpg, .png" required>
                            </div>
                        </div>
                    </div>
                
                    <!--address section-->
                    <h6 class="pt-2"> Address</h6><hr>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Village <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="village" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Village" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Office <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="post" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Office" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Police Station <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="police" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Police Station" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">District <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="dist" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter District" required>
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
                                <label for="exampleInputEmail1">Pin Code <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="pin" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pin Code" required>
                            </div>
                        </div>
                    </div>

                    <h6 class="pt-2"> Educational Details</h6><hr>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Degree / Course <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="degree" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Higher Qualification" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Board / University <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="board" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Board / University" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Passing Year <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="pyear" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Passing Year" required>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Division / Grade <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="division" class="form-control pt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Division / Grade" required>
                            </div>
                        </div>
                    </div>

                    <h6 class="pt-2"> Departmential Details</h6><hr>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                                <label for="department">Department <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="department" class="form-control pt-2" id="department" aria-describedby="emailHelp" placeholder="Enter Department" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="salary">Salary <sup><span style="color: red;">*</span></sup></label>
                                <input type="text" name="salary" class="form-control" id="salary" aria-describedby="emailHelp" placeholder="Enter salary *" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="joining">Joining date</label>
                                <input type="date" name="joining" class="form-control" id="joining" aria-describedby="emailHelp" placeholder="Enter Joining Date">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-block float-right">
                                <input type="reset" class="btn btn-danger" value="Reset">
                                <input type="submit" name="ok" class="btn btn-primary" value="Submit">
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