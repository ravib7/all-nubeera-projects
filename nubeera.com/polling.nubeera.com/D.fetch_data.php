<?php

$respslctquery = "SELECT q.Question_Id, q.Question, r.Response FROM questions AS q LEFT JOIN Responses AS r ON q.Question_Id = r.Question_Id AND r.Student_Id = '".$_SESSION['emailid']."' ORDER BY q.Question_Id";

                // $respslctquery = "SELECT * FROM Responses WHERE Student_Id = '".$_SESSION['emailid']."'";
                
                $respslctresult = mysqli_query($conn, $respslctquery);
                if ($respslctresult)
                {
                    while($respslctrow = mysqli_fetch_array($respslctresult))
                    {
                     $array[] = $respslctrow;
                    }
                }
                $dataset = array(
                  "echo" => 1,
                  "totalrecords" => count($array),
                  "totaldisplayrecords" => count($array),
                  "data" => $array
              );
              
              echo json_encode($dataset);
              
                ?>