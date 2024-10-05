<?php
include("../includes/header.php");
include("../includes/topNavbar.php");
include("../includes/sideBar.php");

require_once "../includes/config.php";

if(isset($_POST['save'])){
    
    $topicName = $_POST['topicName'];
    $materialType = $_POST['mType'];
    $mUrl = $_POST['mUrl'];

    foreach($topicName as $key => $value){
        echo '<script>alert('.$value .')</script>';
    }
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Design a Course</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $domain ?>index.php">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <select id="selectTech" class="form-control" style="width: 100%;">
                                <option value="">Select a technology</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="selectCourse" class="form-control" style="width: 100%;">
                                <option value="">Select a Course</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="chapterName">Chapter Name</label>
                            <input type="text" class="form-control" id="chapterName" name="chapterName"
                                placeholder="Enter chapter name">
                        </div>

                    </div>
                </div>
                <table class="table table-bordered" id="fieldTable">
                    <tr>
                        <th>Topic Name</th>
                        <th>Material Type</th>
                        <th>URL</th>
                        <th>Add or Remove</th>
                    </tr>
                    
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" name="topicName[]" style="width: 100%;">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select name="mType[]" id="mtype" class="form-control" style="width: 100%;">
                                    <option value="video">Video</option>
                                    <option value="pdf">PDF</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="mUrl[]" style="width: 100%;">
                            </div>
                        </td>
                        <td>
                            <input type="button" name="addField" id="addField" class="btn btn-primary" value="Add">
                        </td>
                    </tr>
                </table>
                <center>
                    <button class="btn btn-primary" type="submit" name="save" id="save">Save</button>
                </center>
            </form>
        </div>
    </section>
</div>


<?php include("../includes/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>

    // script for dependent comboBox
    $(document).ready(function () {
        function loadData(type, tId) {
            $.ajax({
                url: "fetch.php",
                type: "POST",
                data: {type: type , id: tId},
                success: function (data) {
                    if (type == "courses") {
                        $("#selectCourse").html(data);
                    } else {
                        $("#selectTech").append(data);
                    }
                }
            });
        }
        loadData();

        $("#selectTech").on("change", function () {
            var tech = $("#selectTech").val();
            //alert(tech);
            loadData("courses", tech);
        })

        
        // end of script for dependent comboBox  

        // script for adding fields
        var html = '<tr><td><div class="form-group"><input type="text"name="topicName[]" style="width: 100%;"></div></td><td><div class="form-group"><select name="mType[]" id="mtype" class="form-control" style="width: 100%;"><option value="video">Video</option><option value="pdf">PDF</option></select></div></td><td><div class="form-group"><input type="text" name="mUrl[]" style="width: 100%;"></div></td><td><input type="button" name="removeField" id="removeField" class="btn btn-danger" value="Remove"></td></tr>';
        var max = 10;
        var x = 1;
        $("#addField").click(function(){
            if(x <= max){
                $("#fieldTable").append(html);
                x++;
            }
        });
        $("#fieldTable").on('click','#removeField',function(){
            $(this).closest('tr').remove();
            x--;
        });

        // end of script for adding fields
    });

</script>