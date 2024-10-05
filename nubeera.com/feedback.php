<?php
    if(isset($_POST['submit'])){


         $db = mysqli_connect("localhost","root","","feedback");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

        $sql1 = "INSERT INTO detailed (`two_aspects_of_programm_relevant_nd_can_add_value_to_day_to _wrk`,`aspects_of_the_programm_need_to_be_improved_upon`,`In terms of achievement of workshop aims and objectives how succ`,`comments regarding the workshop`,`will you recommend this program to your colleagues`,`enter Your email ID`) VALUES('".$_POST['twoaspects']."','".$_POST['aspectsimprove']."','".$_POST['success']."','".$_POST['comments']."','".$_POST['recommend']."','".$_POST['emailid']."')";

        $sql2 = "INSERT INTO general (`Contents_of_the_Programme`,`Usefulness_or_Relevance`,`Facilitators_Domain_Knowledge`,`Presentation_Facilitation`,`Maintain_Interest_nd_Encourage_Participation`,`Use_of_Practical_Illustrations`,`Course_Material`,`Learning_Aids`,`Virtual_Setup`,`Overall_Rating_of_the_Programme`) VALUES('".$_POST['content']."','".$_POST['usefulness']."','".$_POST['domain_knowledge']."','".$_POST['present_facilitate']."','".$_POST['int_enc_partcpte']."','".$_POST['prctal_illustration']."','".$_POST['course_mat']."','".$_POST['lrning_aids']."','".$_POST['vrtual_setup']."','".$_POST['rate_program']."')";

        $result1 = mysqli_query($db,$sql1);

         $result2 = mysqli_query($db,$sql2); 
        if($result1 && $result2)
        {
            echo "data adding succesfull";
            //header("Refresh: 1");
        }
        else
        {
            echo "data adding unsuccesfull!";    
        } 
    }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback Form</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Documentation">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body
    {
        margin: 20rem 15rem 0 12rem;
    }
section, span
{
    float: right;
}
li
{
    list-items: none;
    display: inline-block;
    
    margin: 0 0 0 5rem;
}
div span li 
{
    margin: 0 0 0 4.7rem;
    
}
input[type=text]
{
    padding: 1rem;
    width: 100%;

}
</style>
<body>
<form action="" method="post">
 <h5>1. Subject & Content</h5><br><br>
<section>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
</section><br><br>
<div>
Contents of the Programme: <span> <li><input type="radio" name="content" value="1" id="content1" required></li>
<li><input type="radio" name="content" value="2" id="content2"></li>
<li><input type="radio" name="content" value="3" id="content3"></li>
<li><input type="radio" name="content" value="4" id="content4"></li>
<li><input type="radio" name="content" value="5" id="content5"></li></span><br>
Usefulness/Relevance: <span><li><input type="radio" name="usefulness" value="1" id="usefulness1" required></li>
<li><input type="radio" name="usefulness" value="2" id="usefulness2"></li>
<li><input type="radio" name="usefulness" value="3" id="usefulness3"></li>
<li><input type="radio" name="usefulness" value="4" id="usefulness4"></li>
<li><input type="radio" name="usefulness" value="5" id="usefulness5"></li></span></div><br><br><br>

<h5>2. Facilitator's Effectiveness</h5><br><br>
<section>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
</section><br><br>
<div>
Facilitator's Domain Knowledge: <span> <li><input type="radio" name="domain_knowledge" value="1" id="domain_knowledge1" required></li>
<li><input type="radio" name="domain_knowledge" value="2" id="domain_knowledge2"></li>
<li><input type="radio" name="domain_knowledge" value="3" id="domain_knowledge3"></li>
<li><input type="radio" name="domain_knowledge" value="4" id="domain_knowledge4"></li>
<li><input type="radio" name="domain_knowledge" value="5" id="domain_knowledge5"></li></span><br>
Presentation & Facilitation: <span><li><input type="radio" name="present_facilitate" value="1" id="present_facilitate1" required></li>
<li><input type="radio" name="present_facilitate" value="2" id="present_facilitate2"></li>
<li><input type="radio" name="present_facilitate" value="3" id="present_facilitate3"></li>
<li><input type="radio" name="present_facilitate" value="4" id="present_facilitate4"></li>
<li><input type="radio" name="present_facilitate" value="5" id="present_facilitate5"></li></span><br>
Maintain Interest & Encourage<br> Participation: <span><li><input type="radio" name="int_enc_partcpte" value="1" id="int_enc_partcpte1" required></li>
<li><input type="radio" name="int_enc_partcpte" value="2" id="int_enc_partcpte2"></li>
<li><input type="radio" name="int_enc_partcpte" value="3" id="int_enc_partcpte3"></li>
<li><input type="radio" name="int_enc_partcpte" value="4" id="int_enc_partcpte4"></li>
<li><input type="radio" name="int_enc_partcpte" value="5" id="int_enc_partcpte5"></li></span><br>
Use of Practical Illustrations: <span><li><input type="radio" name="prctal_illustration" value="1" id="prctal_illustration1" required></li>
<li><input type="radio" name="prctal_illustration" value="2" id="prctal_illustration2"></li>
<li><input type="radio" name="prctal_illustration" value="3" id="prctal_illustration3"></li>
<li><input type="radio" name="prctal_illustration" value="4" id="prctal_illustration4"></li>
<li><input type="radio" name="prctal_illustration" value="5" id="prctal_illustration5"></li></span></div><br><br><br>

<h5>3. Course Material</h5><br><br>
<section>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
</section><br><br>
<div>
Course Material: <span> <li><input type="radio" name="course_mat" value="1" id="course_mat1" required></li>
<li><input type="radio" name="course_mat" value="2" id="course_mat2"></li>
<li><input type="radio" name="course_mat" value="3" id="course_mat3"></li>
<li><input type="radio" name="course_mat" value="4" id="course_mat4"></li>
<li><input type="radio" name="course_mat" value="5" id="course_mat5"></li></span><br>
Learning Aids: <span><li><input type="radio" name="lrning_aids" value="1" id="lrning_aids1" required></li>
<li><input type="radio" name="lrning_aids" value="2" id="lrning_aids2"></li>
<li><input type="radio" name="lrning_aids" value="3" id="lrning_aids3"></li>
<li><input type="radio" name="lrning_aids" value="4" id="lrning_aids4"></li>
<li><input type="radio" name="lrning_aids" value="5" id="lrning_aids5"></li></span></div><br><br><br>

<h5>4. Programme Administration</h5><br><br>
<section>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
</section><br><br>
<div>
Virtual Setup: <span> <li><input type="radio" name="vrtual_setup" value="1" id="vrtual_setup1" required></li>
<li><input type="radio" name="vrtual_setup" value="2" id="vrtual_setup2"></li>
<li><input type="radio" name="vrtual_setup" value="3" id="vrtual_setup3"></li>
<li><input type="radio" name="vrtual_setup" value="4" id="vrtual_setup4"></li>
<li><input type="radio" name="vrtual_setup" value="5" id="vrtual_setup5"></li></span><br>
Overall Rating of the Programme: <span><li><input type="radio" name="rate_program" value="1" id="rate_program1" required></li>
<li><input type="radio" name="rate_program" value="2" id="rate_program2"></li>
<li><input type="radio" name="rate_program" value="3" id="rate_program3"></li>
<li><input type="radio" name="rate_program" value="4" id="rate_program4"></li>
<li><input type="radio" name="rate_program" value="5" id="rate_program5"></li></span></div><br><br><br>

<h5>5. Name two aspects of the programme that were relevant and can add value to your day to day work?</h5>
<input type="text" placeholder="Enter your answer" name="twoaspects" required><br><br><br><br>

<h5>6. Which aspects of the programme do you think need to be improved upon? (Please give suggestions for improvement)</h5>
<input type="text" placeholder="Enter your answer" name="aspectsimprove" required><br><br><br><br>

<h5>7. In terms of achievement of workshop aims and objectives, how successful do you think the programme was?</h5>
<input type="text" placeholder="Enter your answer" name="success" required><br><br><br><br>

<h5>8. Any other comments regarding the workshop?</h5>
<input type="text" placeholder="Enter your answer" name="comments" required><br><br><br><br>

<h5>9. Would you recommend this program to your colleagues?</h5>
<input type="radio" name="recommend" value="Yes" id="recommend1" required> Yes <br>
<input type="radio" name="recommend" value="No" id="recommend2"> No <br><br><br><br>

<h5>10. Please enter Your Email ID</h5>
<input type="text" placeholder="Enter your answer" name="emailid" required><br><br><br>

<input type="submit" value="submit" name="submit" class="btn-primary" required><br><br><br>
</form>
</body>
</html>

<!-- <label for="content1">1</label>
<label for="content2">2</label>
<label for="content3">3</label>
<label for="content4">4</label>
<label for="content5">5</label> -->
