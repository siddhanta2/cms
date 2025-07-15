<?php
    include 'sql/config.php';
    include 'include/header.php';
    include ('include/sidebar.php');
    include 'include/top-header.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pt-3">
                <h2>Dashboard <span class="float-right" style="font-size: 14px; line-height: 45px;"><a href="dashboard.php" class="mr-1">Home</a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span><span class="ml-2">Student Panel</span></span></h2><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="hod-card">
                    <a href="#">My-Profile</a>
                    <!-- <a href="#">Teacher</a> -->
                    <!-- <a href="#">Student</a> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="hod-card-form">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <h5>Student Information</h5>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                           <a href="addstudent.php" class="float-right" id="btn">Add student</a>
                        </div>
                    </div><hr>

                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email Id</th>
                                <th>Department</th>
                                <th>Date of Birth</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = mysqli_query($conn, "SELECT * FROM students") or mysqli_error($conn);
                                $i = 1;
                                if(mysqli_num_rows($sql) > 0){
                                    while($row = mysqli_fetch_array($sql)){
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['department']; ?></td>
                                    <td>
                                        <?php
                                            $date = $row['dob'];
                                            $orgdate = date('d-m-Y', strtotime($date));
                                            echo $orgdate;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if($row['status'] == 0){
                                        ?>
                                            <span class="badge badge-success">Active</span>
                                        <?php
                                            }else{
                                        ?>
                                            <span class="badge badge-warning">De-active</span>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="editstudent.php?id=<?php echo $row['id']; ?>"><span class="badge badge-primary">Edit</span></a>
                                        <a href="student/deletestudent.php?id=<?php echo $row['id']; ?>"><span class="badge badge-danger">Delete</span></a>
                                    </td>
                                </tr>
                            <?php
                            $i++;
                                    }
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email Id</th>
                                <th>Department</th>
                                <th>Date of Birth</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>

<?php
    include 'include/footer.php';
?>