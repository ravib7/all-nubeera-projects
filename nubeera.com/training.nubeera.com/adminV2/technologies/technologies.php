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
                echo '<script>alert("Record added successfully")</script>';
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
                    <h5>Technology Entries</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">
                                Add New Technology
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
                                    <label for="techCategory">Technology Category</label>
                                    <input type="text" class="form-control" id="techCategory" name="techCategory"
                                        placeholder="Enter Technology Category">
                                </div>
                                <div class="form-group">
                                    <label for="techName">Technology Name</label>
                                    <input type="text" class="form-control" id="techName" name="techName"
                                        placeholder="Technology Name">
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="techStatus" name="techStatus"
                                        checked>
                                    <label class="form-check-label" for="techStatus">Is Active</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add This Technology</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Of Technologies</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
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
                                Technology Category
                            </th>
                            <th style="width: 30%">
                                Technology Name
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
                        $sql="SELECT * FROM technology";

                        if($result=mysqli_query($conn,$sql)){
                            if($result->num_rows >0){
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>". $row['TechId_PK'] ."</td>";
                                        echo "<td>". $row['TechCategory'] ."</td>";
                                        echo "<td>". $row['TechName'] ."</td>";
                                        echo "<td>".$row['IsActive'] ."</td>";
                                        echo "<td class='project-actions text-right'>";
                                            echo "<a class='btn btn-info btn-sm' href='readTech.php?id=". $row['TechId_PK'] ."' title='View Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-eye'></i></a>";
                                            echo "<a class='btn btn-info btn-sm' href='updateTech.php?id=". $row['TechId_PK'] ."' title='Edit Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-pencil-alt'></i></a>";
                                            echo "<a class='btn btn-danger btn-sm' onClick='return delfun() ' href='deleteTech.php?id=".$row['TechId_PK']."' title='Delete Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-trash'></i></a>";
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
    function delfun() {

        return confirm('Are you sure to delete this data?');
    }
</script>

<?php
include("../includes/footer.php");
?>