<?php
include 'sql/config.php';
include 'include/header.php';
include('include/sidebar.php');
include 'include/top-header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 pt-3">
            <h2>Dashboard <span class="float-right" style="font-size: 14px; line-height: 45px;"><a href="dashboard.php"
                        class="mr-1">Home</a> <span><i class="fas fa-angle-right"></i><i
                            class="fas fa-angle-right"></i></span><span class="ml-2">Teacher Panel</span></span></h2>
            <hr>
        </div>
    </div>
    <div class="row">
            <div class="col-12">
                <div class="hod-card">
                    <a href="#">My-Profile</a>
                   
                    <a href="studentattendance.php">Student Attendance</a>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="hod-card-form">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <h5>Teacher Information</h5>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                           <a href="addteacher.php" class="float-right" id="btn">Add teacher</a>
                        </div>
                    </div><hr>

                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                                <th>Jul</th>
                                <th>Aug</th>
                                <th>Sep</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>

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
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                        
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
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                                <th>Jul</th>
                                <th>Aug</th>
                                <th>Sep</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
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