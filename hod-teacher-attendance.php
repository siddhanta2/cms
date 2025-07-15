<?php
include 'sql/config.php';
include 'include/header.php';
include('include/sidebar.php');
include 'include/top-header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 pt-3">
        <h2>Dashboard <span class="float-right" style="font-size: 14px; line-height: 45px;"><a href="dashboard.php" class="mr-1">Home</a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span><a href="hod.php" class="mr-1"><span class="ml-2">HOD Panel</span></a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span><a href="hods-teacher.php" class="mr-1"><span class="ml-2">Teachers</span></a> <span><i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></span> <span class="ml-2">Teachers Attendence</span></span></h2><hr>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="hod-card">
                <a href="#">My-Profile</a>
                <a href="hods-teacher.php">Teacher</a>
                <a href="#">Student</a>
            </div>
        </div>
    </div>
    <!-- #re-->
    <div class="row">
        <div class="col-12">
            <div class="hod-card-form">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h5>Attendence</h5>
                    </div>

                    <!-- <div class="col-lg-4 col-md-4 col-sm-12">
                        <a href="addteacher.php" class="float-right" id="btn">Add teacher</a>
                        <a href="attendencetech.php" class="float-right mx-2" id="btn">Attendence</a>
                    </div> -->
                </div>
                <hr>

                <table id="example" class="display nowrap center" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Name</th>
                            <th scope="col">Jan</th>
                            <th scope="col">Feb</th>
                            <th scope="col">March</th>
                            <th scope="col">April</th>
                            <th scope="col">May</th>
                            <th scope="col">June</th>
                            <th scope="col">July</th>
                            <th scope="col">Aug</th>
                            <th scope="col">Sep</th>
                            <th scope="col">Oct</th>
                            <th scope="col">Nov</th>
                            <th scope="col">Dec</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM teachers") or mysqli_error($conn);
                        $i = 1;
                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_array($sql)) {
                        ?>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">moumi</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">mousumi</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">20</td>
                                </tr>
                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th scope="col">Sno</th>
                            <th scope="col">Name</th>
                            <th scope="col">Jan</th>
                            <th scope="col">Feb</th>
                            <th scope="col">March</th>
                            <th scope="col">April</th>
                            <th scope="col">May</th>
                            <th scope="col">June</th>
                            <th scope="col">July</th>
                            <th scope="col">Aug</th>
                            <th scope="col">Sep</th>
                            <th scope="col">Oct</th>
                            <th scope="col">Nov</th>
                            <th scope="col">Dec</th>
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