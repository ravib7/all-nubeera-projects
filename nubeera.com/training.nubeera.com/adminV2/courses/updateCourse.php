<?php 

include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");

require_once "../includes/config.php";
if(isset($_GET['id']) && $_GET['id'] != ""){
    $id = $_GET["id"];
    
    $sql="select * from courses where CId_PK = '$id'";

    $query = mysqli_query($conn,$sql);
    
    if(!$query){
        echo "<script>alert(Error updating record: " . $conn->error.")</script>";
    }else{
            if($query->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_assoc($query);
                
                // Retrieve individual field value
                $opId = $row['TechId_FK'];
                $courseCode = $row["CCode"];
                $courseName = $row["CName"];
                $courseStatus = $row["IsActive"];
                if($courseStatus == 1){
                    $attrCourseStatus = "checked";
                }else{
                    $attrCourseStatus="";
                }
                
            }
        }      
}

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $courseCode = $_POST['courseCode'];
        $courseName = $_POST["courseName"];
        //$techStatus= $_POST["techStatus"];

        if(isset($_POST["courseStatus"])){
            $tempCheck=1;
        }else{
            $tempCheck=0;
        }

        $sql= "UPDATE courses SET CCode='$courseCode', CName='$courseName', IsActive='$tempCheck' WHERE CId_PK='$id'";

        
        if(mysqli_query($conn,$sql)){
            echo '<script>
                    alert("Updated Successfully");
                    window.location.href="courses.php";
                  </script>';
        }else{
            echo '<script>alert('.mysqli_error($conn).')</script>';
        }
        
        
    }


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Record</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item btn btn-primary"><a href="courses.php" style="color: #fff;">Back</a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Please Select a Technology</label>
                            <div class="row">
                                <div class="col-sm-10">
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
                                                
                                    ?>
                                    <select id="selectId" class="form-control select2" style="width: 50%;">
                                        <option value="">Select a technology</option>
                                        <?php
                                                while($row = mysqli_fetch_array($result)){
                                                    
                                        ?>
                                        <option value="<?php echo $row['TechId_PK'];?>"><?php echo $row['TechName']; ?>
                                        </option>
                                        <?php   
                                            if($row['TechId_PK'] == $opId){
                                                $temVal = $row['TechId_PK'];
                                            }
                                            }
                                            echo '<script>document.getElementById("selectId").getElementsByTagName("option")['.$temVal.'].selected = "selected"</script>';
                                        ?>
                                    </select>
                                </div>
                                <!-- <div class="col-sm-2">
                                            <input id="one" type="text" value="">
                                        </div> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="courseCode">Course Code</label>
                            <input type="text" class="form-control" id="courseCode" name="courseCode"
                                value="<?php echo $courseCode; ?>">
                        </div>
                        <div class="form-group">
                            <label for="courseName">Course Name</label>
                            <input type="text" class="form-control" id="courseName" name="courseName"
                                value="<?php echo $courseName; ?>">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="courseStatus" name="courseStatus"
                                <?php echo $attrCourseStatus ?>>
                            <label class="form-check-label" for="courseStatus">Is Active</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content End -->
</div>


<?php
include("../includes/footer.php");
?>