<!DOCTYPE html>
<html>
    <head> 

    <title>Company Project</title>   
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <?php include("connection.php"); ?>
    
    </head>

    <body>
    <div class="wrapper">
	<div class="container">
		<h1>Employee Details</h1>
		<form class="form" action=" Employee form.php" method="post">
			<input type="text" placeholder="Full Name" name="fullname" />
			<input type="text" placeholder="Employee Id" name="employeeid" />
            <input type="text" placeholder="Department Id" name="departmentid" />
            
			<input type="submit" id="login-button" name="save"></input>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


 <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // echo "Before Collecting values";
    $fullname          =    $_REQUEST['fullname'];
    $employeeid        =    $_REQUEST['employeeid'];
    $departmentid      =    $_REQUEST['departmentid'];
    // echo "After Collecting values";
    $query = "INSERT INTO employee values('$fullname', '$employeeid', '$departmentid')";
    
    $data = mysqli_query($connection,$query);

    if($data)
    {
        echo "<script>alert('Data Inserted into Database')</script>";
    }
    else
    {
        echo "<script>alert('Failed')</script>";
    }
}

?>

<script src="script.js">


</body>
</html>