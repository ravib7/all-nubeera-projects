<?php 

include("includes/header.php");
include("includes/topNavbar.php");
include("includes/sideBar.php");

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Our Technologies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <button class="btn btn-primary">
                                <a href="addTech.php" style="text-decoration: none;color:#fff;">Add Technology</a>
                                </buuton>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

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
                        require_once "includes/config.php";
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
                                            echo "<a class='btn btn-info btn-sm' href='#?id=". $row['TechId_PK'] ."' title='View Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-eye'></i></a>";
                                            echo "<a class='btn btn-info btn-sm' href='#?id=". $row['TechId_PK'] ."' title='Edit Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-pencil-alt'></i></a>";
                                            echo "<a class='btn btn-danger btn-sm' href='#?id=".$row['TechId_PK']."' title='Delete Record' data-toggle='tooltip' style='margin:0.1rem;'><i class='fas fa-trash'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                
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



<?php
include("includes/footer.php");
?>