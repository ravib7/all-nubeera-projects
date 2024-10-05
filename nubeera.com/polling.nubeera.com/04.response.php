<?php
    session_start();
    if(isset($_SESSION['fname']))
    {
?>

<html>
    <head>
        <title>NubeEra Polling Response</title>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <!-- <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
<body>
    
<div class="container mt-5">
    <span id="message" style="background: #FFF082; border: 2px solid #FF8E00; border-radius: 8px; padding: 05px 10px; margin: 0; display: none; width: 100%;"> </span>
    <center><h1 class="" style="display: inline-block;"> Welcome Mr. <?php echo $_SESSION['fname']; ?> </h1></center>  
    <span style="float: right; display: inline-block; background: blue; padding:5px; "> <a href="B.LogOut.php" style="color: white; text-decoration: none;"> <i class='fas fa-sign-out-alt'></i> Log Out </a></span> 
    <span id="refreshBtn" style="float: right; display: inline-block; cursor: pointer; padding:5px; " style="display: inline-block;" onclick='refresh();' class="mx-5"><i class="fa fa-refresh"></i></span> 
</div> 

<div class="container pt-5">  
    <form action=" " method="post">  
        <?php
            include("A.Connect_Db.php");
            $query = "SELECT * FROM questions where Question_Id=(select max(Question_Id) from questions)";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                if($row = mysqli_fetch_array($result))
                {  
                    echo"<label for='quest_id'> ID </label>   
                    <input type='text' name='quest_id' id='quest_id' value=".$row['Question_Id']." onkeyup='getQuest(this.value)' required> ";
                    
                    echo" <label for='quest'> Question </label>   
                    <input type='text' placeholder='question...' name='quest' id='quest' value='".$row['Question']."' readonly> ";
                    
                    echo" <label for='resp'> Your Response </label>   
                    <input type='text' placeholder='response...' name='resp' id='resp' required>
                    
                    <button type='submit'> Post </button>";
                }
            }
        ?>
    </form>
</div>   
     
  
<div class="container mt-5" id>  
    <table class="table" id="respTable">
        <thead class="table-dark">
            <tr>
                <th>Question ID</th>
                <th>Question</th>
                <th>Your Response</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody id="tData">
            <?php
            
                $respslctquery = "SELECT q.Question_Id, q.Question, r.Response FROM questions AS q LEFT JOIN Responses AS r ON q.Question_Id = r.Question_Id AND r.Student_Id = '".$_SESSION['emailid']."' ORDER BY q.Question_Id";

                // $respslctquery = "SELECT * FROM Responses WHERE Student_Id = '".$_SESSION['emailid']."'";
                
                $respslctresult = mysqli_query($conn, $respslctquery);
                if ($respslctresult)
                {
                    while($respslctrow = mysqli_fetch_array($respslctresult))
                    {
                        echo "<tr>
                                    <td style='width: 15%'>".$respslctrow['Question_Id']." </td>
                                    <td style='width: 25%;'> ".$respslctrow['Question']." </td>
                                    <td id='questn".$respslctrow['Question_Id']."'>".$respslctrow['Response']." </td>
                                    <td style='width: 20%'> <i class='fas fa-edit' onclick=updateResp('questn".$respslctrow['Question_Id']."','".$respslctrow['Response']."') title='edit response'></i>
                                    <i class='fas fa-trash-alt' onclick=delResp('".$respslctrow['Question_Id']."')></i></td>
                            </tr>";
                    }
                }
                else { die("could not get fetch responses from database"); }
            ?>
        </tbody>
    </table>
</div>    
</body>
         <script type="text/javascript">
$(document).ready(function() {
                                $('#respTable').DataTable({
                                                            "processing": true,
                                                            "ajax": "D.fetch_data.php",
                                                            "columns": [
                                                                {data: 'Question_Id'},
                                                                {data: 'Question'},
                                                                {data: 'Response'}]
                                                        });
                                        });
                                        
            function getQuest(qsId) {
                
            $.ajax({
                url: 'pro.php',
                type: 'POST',
                dataType: 'json',
                data: {qsIdvalue: qsId},
                success: function(data) {
                    if(data.status) {
                        $("#quest").val(data.qsData);
                        
                    } else {
                        $("#quest").val("Invalid Question ID");
                    }   
                }
            });         
        }
        function updateResp(cellId, respVal)
        {
            $('#'+cellId).html("<input type='text' value="+respVal+"> </input>");
        }

        function delResp(delqsId) {
                $.ajax({
                    url: 'pro.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {delqsIdval: delqsId},
                    success: function(data) {
                        if(data.status) {
                            window.location.reload();
                            
                        } else {
                            alert("deleted unsuccess");
                        }   
                    }
                });         
            }
            function refresh()
            {
                // $('#respTable').dataTable().api().ajax.reload();
                // $("#respTable").load("04.response.php #respTable");
                // $("#respTable").DataTable().fnDestroy();
                // $("#respTable").dataTable();
                // $("#respTable").dataTable().fnReloadAjax();
                // $('#respTable').dataTable().ajax.reload();
                // $('#respTable').dataTable().ajax.reload();
                $('#respTable').DataTable().ajax.reload(null, false);
                // 9960999238
            }
            if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
            
        </script> 
</html>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") //submit response
    {
        $slctrespquery = "SELECT * FROM Responses WHERE Student_Id = '".$_SESSION['emailid']."' AND Question_Id = '".$_POST['quest_id']."'";
        $slctrespresult = mysqli_query($conn, $slctrespquery);
        if ($slctrespresult)
        {
            if(mysqli_fetch_array($slctrespresult) > 0)
            {
                ?> <script> $("#message").html("You have already submitted the response! Edit your response instead!");
                            document.getElementById("message").style.display = "flex";
                   </script> <?php
                // header("Refresh:1; url=04.response.php");
            }  
            else
            {
                $sqlquery = "INSERT INTO Responses (`Student_Id`,`Question_Id`,`Question`,`Student_Name`,`Response`) VALUES('".$_SESSION['emailid']."','".$_POST['quest_id']."','".$_POST['quest']."','".$_SESSION['fname']."','".$_POST['resp']."')";
    
                if(mysqli_query($conn, $sqlquery))
                {
                    ?> <script> $("#message").html("Response Posted Successfully!");
                    document.getElementById("message").style.display = "flex"; 
                    document.getElementById("message").style.background = "#83F1AE "; 
                    document.getElementById("message").style.border = "2px solid #006E2B ";
                    // $( "#respTable" ).load( "04.response.php #respTable" );
                    //window.location.reload(); </script> <?php
                    // header("location: 04.response.php");
                }
                else
                {
                    ?> <script> $("#message").html("Failed to post response!");
                                document.getElementById("message").style.display = "flex"; </script> <?php               
                }
                mysqli_close($conn);   
            }                 
        }  
    }    
}//session condition closed
    else
    {
        header("location: 03.login.php");
    }