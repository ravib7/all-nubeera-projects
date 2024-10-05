<?php 

include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");


require_once "../includes/config.php";

$courseCode = "";
$courseName="";
$courseStatus = "";

    if($conn->connect_error){
        die('<script>alert('.$conn->connect_error.')</script>');
    }else{
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $courseCode = $_POST['courseCode'];
            $courseName = $_POST['courseName'];
            $courseTechId = $_POST['HideOne'];

            if(isset($_POST["courseStatus"])){
                $tempCheck=1;
            }else{
                $tempCheck=0;
            }

            $sql= "INSERT INTO `courses` (`TechId_FK`,`CCode`, `CName`, `IsActive`) 
            VALUES ($courseTechId,'$courseCode', '$courseName', '$tempCheck')";

            
            if(mysqli_query($conn,$sql)){
                echo '<script>alert("Course added successfully")</script>';
            }else{
                echo '<script>alert('.mysqli_error($conn).')</script>';
            }
            
        }
    }



?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Courses Entries</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">
                                Add New Course
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row" style="margin-bottom: 2.5rem;">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div id="demo" class="collapse">
                        <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Please Select a Technology</label>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <select id="selectId" class="form-control select2" style="width: 50%;" onchange="findName()">
                                                <!-- fetching option values for comboBox -->
                                                <?php 
                                                            // config file for connecting database
                                                            require_once "../includes/config.php";
                                                            if($conn->connect_error){
                                                                die('<script>alert('.$conn->connect_error.')</script>');
                                                            }
                                                            // select query to fetch techs from db table
                                                            $sql="SELECT * FROM technology";

                                                            $result = mysqli_query($conn,$sql);
                                                                while($row = mysqli_fetch_array($result)){
                                                        ?>
                                                <option value="<?php echo $row['TechId_PK'];?>"><?php echo $row['TechName']; ?></option>
                                                <?php
                                                                }
                                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input id="HideOne" name="HideOne" type="hidden" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="courseCode">Course Code</label>
                                    <input type="text" class="form-control" id="courseCode" name="courseCode"
                                        placeholder="Enter Course Code">
                                </div>
                                <div class="form-group">
                                    <label for="courseName">Course Name</label>
                                    <input type="text" class="form-control" id="courseName" name="courseName"
                                        placeholder="Course Name">
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="courseStatus" name="courseStatus"
                                        checked>
                                    <label class="form-check-label" for="courseStatus">Is Active</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add This Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">

            </div>
        </div>




        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Of Courses</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button> -->
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                Id
                            </th>
                            <th style="width: 30%">
                                Course Code
                            </th>
                            <th style="width: 30%">
                                Course Name
                            </th>
                            <th style="width: 15%;">
                                Status
                            </th>
                            <th style="width: 15%" class="text-center">
                                Action
                            </th>
                            <!-- <th style="width: 20%">
                            </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // config file for connecting database
                        require_once "../includes/config.php";
                        if($conn->connect_error){
                            die('<script>alert('.$conn->connect_error.')</script>');
                        }

                        //select query to fetch tech from db table
                        $sql="SELECT * FROM courses";

                        if($result=mysqli_query($conn,$sql)){
                            if($result->num_rows >0){
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>". $row['CId_PK'] ."</td>";
                                        echo "<td>". $row['CCode'] ."</td>";
                                        echo "<td>". $row['CName'] ."</td>";
                                        echo "<td>".$row['IsActive'] ."</td>";
                                        echo "<td class='project-actions text-right'>";
                                            echo "<a class='btn btn-info btn-sm' href='readCourse.php?id=". $row['CId_PK'] ."' title='View Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-eye'></i></a>";
                                            echo "<a class='btn btn-info btn-sm' href='updateCourse.php?id=". $row['CId_PK'] ."' title='Edit Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-pencil-alt'></i></a>";
                                            echo "<a class='btn btn-danger btn-sm' onClick='return delfun() ' href='deleteCourse.php?id=".$row['CId_PK']."' title='Delete Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-trash'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        mysqli_close($conn);
                    ?>

                    </tbody>
                </table>





            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function findName(){
        
        var idPK = document.getElementById("selectId").value;
        document.getElementById("HideOne").value = idPK;
        }
    function delfun() {

        return confirm('Are you sure to delete this data?');
    }
</script>

<?php


include("../includes/footer.php");
?>
