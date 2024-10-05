<?php 

include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");


require_once "../includes/config.php";

$techCategory = "";
$techName="";
$techStatus = "";

    if($conn->connect_error){
        die('<script>alert('.$conn->connect_error.')</script>');
    }else{
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $techCategory = $_POST['techCategory'];
            $techName = $_POST["techName"];
            //$techStatus= $_POST["techStatus"];

            if(isset($_POST["techStatus"])){
                $tempCheck=1;
            }else{
                $tempCheck=0;
            }

            $sql= "INSERT INTO `technology` (`TechCategory`, `TechName`, `IsActive`) 
            VALUES ('$techCategory', '$techName', '$tempCheck')";

            
            if(mysqli_query($conn,$sql)){
                echo '<script>alert("Technology Added Successfully")</script>';
            }else{
                echo '<script>alert('.mysqli_error($conn).')</script>';
            }
            
            mysqli_close($conn);
            
        }
    }



?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Technology</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item btn btn-primary"><a href="technologies.php" style="color: #fff;">Back</a></li>
                        <!-- <li class="breadcrumb-item active">General Form</li> -->
                    </ol>
                </div>
            </div>
        </div>  <!--/.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Technology</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="techCategory">Technology Category</label>
                                    <input type="text" class="form-control" id="techCategory"
                                        name="techCategory" placeholder="Enter Technology Category">
                                </div>
                                <div class="form-group">
                                    <label for="techName">Technology Name</label>
                                    <input type="text" class="form-control" id="techName"
                                        name="techName" placeholder="Technology Name">
                                </div>
                                
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="techStatus" name="techStatus" checked>
                                    <label class="form-check-label" for="techStatus">Is Active</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add This Technology</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>


<?php
include("../includes/footer.php");
?>