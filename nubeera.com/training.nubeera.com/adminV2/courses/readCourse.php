<?php 

include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");

require_once "../includes/config.php";
if(isset($_GET['id']) && $_GET['id'] != ""){
    $id = $_GET["id"];
    
    $sql="SELECT c.CId_PK,c.TechId_FK,t.TechName,c.CCode,c.CName,c.IsActive FROM courses c JOIN technology t ON c.TechId_FK = t.TechId_PK WHERE c.CId_PK='$id'";

    $query = mysqli_query($conn,$sql);
    
    if(!$query){
        echo "<script>alert(Error deleting record: " . $conn->error.")</script>";
      }else{
        if($query->num_rows == 1){
            /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_assoc($query);
            
            // Retrieve individual field value
            $techName = $row['TechName'];
            $courseCode = $row["CCode"];
            $courseName = $row["CName"];
            $courseStatus = $row["IsActive"];
            if($courseStatus == 1){
                $tempVar="Active";
            }else{
                $tempVar="Not Active";
            }
        }
      }
      
      mysqli_close($conn);
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
                        <li class="breadcrumb-item btn btn-primary"><a href="courses.php"
                                style="color: #fff;">Back</a></li>
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
                    <form>
                        <div class="form-group">
                        <label for="courseCode">Course Technology</label>
                            <input type="text" class="form-control" id="courseCode" readonly value="<?php echo $techName; ?>">
                        </div>
                        <div class="form-group">
                        <label for="courseCode">Course Code</label>
                            <input type="text" class="form-control" id="courseCode" readonly value="<?php echo $courseCode; ?>">
                        </div>
                        <div class="form-group">
                        <label for="courseName">Course Name</label>
                            <input type="text" class="form-control" id="courseName" readonly value="<?php echo $courseName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="courseStatus">Status</label>
                            <input type="text" class="form-control" id="courseStatus" readonly value="<?php echo $tempVar; ?>">
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