<?php 

include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");

require_once "../includes/config.php";
if(isset($_GET['id']) && $_GET['id'] != ""){
    $id = $_GET["id"];
    
    $sql="select * from technology where TechId_PK = '$id'";

    $query = mysqli_query($conn,$sql);
    
    if(!$query){
        echo "<script>alert(Error deleting record: " . $conn->error.")</script>";
    }else{
            if($query->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_assoc($query);
                
                // Retrieve individual field value
                $techCategory = $row["TechCategory"];
                $techName = $row["TechName"];
                $techStatus = $row["IsActive"];
                if($techStatus == 1){
                    $attrTechStatus = "checked";
                }else{
                    $attrTechStatus="";
                }
                
            }
        }      
}

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $techCategory = $_POST['techCategory'];
        $techName = $_POST["techName"];
        //$techStatus= $_POST["techStatus"];

        if(isset($_POST["techStatus"])){
            $tempCheck=1;
        }else{
            $tempCheck=0;
        }

        $sql= "UPDATE technology SET TechCategory='$techCategory', TechName='$techName', IsActive='$tempCheck' WHERE TechId_PK='$id'";

        
        if(mysqli_query($conn,$sql)){
            echo '<script>
                    alert("Updated Successfully");
                    window.location.href="technologies.php";
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
                        <li class="breadcrumb-item btn btn-primary"><a href="technologies.php"
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
                    <form action="" method="POST">
                        <div class="form-group">
                        <label for="techCategory">Technology Category</label>
                            <input type="text" class="form-control" id="techCategory" name="techCategory" value="<?php echo $techCategory; ?>">
                        </div>
                        <div class="form-group">
                        <label for="techName">Technology Name</label>
                            <input type="text" class="form-control" id="techName" name="techName"  value="<?php echo $techName; ?>">
                        </div>
                        <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="techStatus" name="techStatus" <?php echo $attrTechStatus ?>>
                                    <label class="form-check-label" for="techStatus">Is Active</label>
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