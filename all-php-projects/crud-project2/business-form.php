<?php
require('database.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Business Application Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Components\CSS\registraion-form.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" href="Components/CSS/navbar.css"> 
	  <link rel="stylesheet" href="Components/CSS/style.css">
	  <link rel="stylesheet" href="Components/CSS/about-us.css">
    <link rel="stylesheet" href="Components/CSS/EventsNews.css">
    <link rel="stylesheet" href="Components/CSS/image-slide.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

 <body>


 <!-------------------------Navbar-start---------------------------->

 <!-- <nav>
      <label for="btn" class="icon">
        <span class="fas fa-bars"></span>
      </label> 

      <input type="checkbox" id="btn"> 
      <ul>
			<li style=""><a href="view.php">Home</a></li>
        
       <li>
          <label for="btn-1" class="show">Application +</label>
          <a href="#">Application</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="business-form.php">Business</a></li>
            <br>
            <li><a href="Job-form.php">Job</a></li>
          </ul>
        </li>
        
        <li>
          <li><a href="events-news.html">Events & News</a></li>
          <li><a href="GR-page.php">GR</a>
        </li>
     
        <li>
          <label for="btn-2" class="show">Login +</label>
          <a href="Admin-Login.php">Login</a>
        </li>

            <li><a href="about-us.html">About us</a></li>
            <li ><a href="contact-us.html">Contact us</a></li>
              </ul>
            </li> 
          </ul> 
        </li>
      </ul>
    </nav>          
        -->

<!-------------------------Navbar-End---------------------------->
  
  <h2 style="text-align:center;">Job Application Form</h2>
  <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="row jumbotron">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="name">Full Name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div> 
        </div>
     
    <div class="col-sm-4">
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
      <label for="birthday">Data of birth:</label>
      <input type="date" class="form-control" id="birthday" name="birthday">
      </div> 
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="phone">Phone no. :</label>
        <input type="phone" class="form-control" id="phone" name="phone" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="phone">Alternate Phone no. :</label>
        <input type="phone" class="form-control" id="ahone" name="aphone">
       </div>
    </div>

    <div class="col-sm-4">
       <div class="form-group">
        <label for="aadhaar">Aadhaar card no. :</label>
        <input type="number" class="form-control" id="aadhaar" name="aadhaar" required>
       </div>
      </div>


    <div class="col-sm-4">
      <div class="form-group">
                <label>Gender :</label>
                <select class="form-control" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
                <label>Cast :</label>
                <select class="form-control" name="cast" required>
                  <option value="">Select</option>
                  <option value="OPEN">OPEN</option>
                  <option value="OBC">OBC</option>
                  <option value="SC">SC</option>
                  <option value="ST">ST</option>
                  <option value="NT">NT</option>
                  <option value="VJNT">VJNT</option>
                  <option value="EBS">EBS</option>
                </select>
      </div>
    </div>

            <div class="col-sm-4">
             <div class="form-group">
               <label>Jobs :</label>
               <select class="form-control" name="job" required>
                   <option value="">Select</option>
                   <option value="Accountant">Accountant</option>
                   <option value="Actor/Actress">Actor/Actress</option>
                   <option value="Aerospace Engineer">Aerospace Engineer</option>
                   <option value="Air Traffic Controller">Air Traffic Controller</option>
                   <option value="Architect">Architect</option>
                   <option value="Art Director">Art Director</option>
                   <option value="Biologist">Biologist</option>
                   <option value="Bus Driver">Bus Driver</option>
                   <option value="Civil Engineer">Civil Engineer</option>
                   <option value="Content Writer">Content Writer</option>
                   <option value="Customer Service Representative">Customer Service Representative</option>
                   <option value="Data Analyst">Data Analyst</option>
                   <option value="Dentist">Dentist</option>
                   <option value="Doctor">Doctor</option>
                   <option value="Electrician">Electrician</option>
                   <option value="Event Planner">Event Planner</option>
                   <option value="Fashion Designer">Fashion Designer</option>
                   <option value="Financial Analyst">Financial Analyst</option>
                   <option value="Firefighter">Firefighter</option>
                   <option value="Flight Attendant">Flight Attendant</option>
                   <option value="Graphic Designer">Graphic Designer</option>
                   <option value="Human Resources Manager">Human Resources Manager</option>
                   <option value="Information Technology (IT) Specialist">Information Technology (IT) Specialist</option>
                   <option value="Interior Designer">Interior Designer</option>
                   <option value="Journalist">Journalist</option>
                   <option value="Lawyer">Lawyer</option>
                   <option value="Marketing Manager">Marketing Manager</option>
                   <option value="Nurse">Nurse</option>
                   <option value="Occupational Therapist">Occupational Therapist</option>
                   <option value="Pharmacist">Pharmacist</option>
                   <option value="Photographer">Photographer</option>
                   <option value="Pilot">Pilot</option>
                   <option value="Police Officer">Police Officer</option>
                   <option value="Product Manager">Product Manager</option>
                   <option value="Professor/Teacher">Professor/Teacher</option>
									 <option value="Psychologist">Psychologist</option>
                   <option value="Real Estate Agent">Real Estate Agent</option>
                   <option value="Receptionist">Receptionist</option>
                   <option value="Sales Representative">Sales Representative</option>
                   <option value="Software Engineer">Software Engineer</option>
                   <option value="Taxi/Uber/Lyft Driver">Taxi/Uber/Lyft Driver</option>
                   <option value="Translator">Translator</option>
                   <option value="Web Developer">Web Developer</option>							  
                 </select>
             </div>
           </div>

    
       <div class="col-sm-4">
       <div class="form-group">
       <label for="state">State :</label>
       <select id="state" class="form-control" name="state" required>
      <option value="">Select State</option>
      <?php
      // Fetch states from the database
      $result = $conn->query("SELECT id, name FROM `state`");
      while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['name']}</option>";
      }
      ?>
      </select>
       </div>
      </div>

      <div class="col-sm-4">
       <div class="form-group">
       <label for="district">District :</label>
       <select id="district" class="form-control" name="district" required>
       <option value="">Select District</option>
       </select>
       </div>
      </div>

      <div class="col-sm-4">
       <div class="form-group">
        <label for="city">City:</label>
        <select id="city" class="form-control" name="city" required>
          <option value="">Select City</option>
        </select>
       </div>
      </div>

      <div class="col-sm-4"> 
      <div class="form-group">
        <label for="address">Complete Address :</label>
        <input type="text" class="form-control" id="address" name="address" required>
       </div>
      </div>
      
      <!-- <div class="col-sm-4">
        <div class="form-group">
        <label for="address">Upload Image :</label>
        <input type="file" class="form-control" name="profilepic"  required="true">
      </div>      
      </div> -->
      
      <div class="col-md-12">
       <button type="submit" class="btn btn-success" name="btn-add">Submit</button>
      </div>
    </div>
    </form>
  </div>
  <script src="district-city-script.js"></script>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  $phone = $_POST['phone'];
  $aphone = $_POST['aphone'];
  $aadhaar = $_POST['aadhaar'];
  $gender = $_POST['gender'];
  $cast = $_POST['cast'];
  $job = $_POST['job'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  // $image = $_POST['image'];

  $sql = "INSERT INTO `job-form` (`name`, `email`, `gender`, `birthday`, `phone`, `aphone`, `city`, `district`, `state`, `aadhaar`, `address`, `cast`, `job`) 
          VALUES ('$name', '$email', '$gender', '$birthday', '$phone', '$aphone', '$city', '$district', '$state', '$aadhaar', '$address', '$cast', '$job')";

  if (mysqli_query($conn, $sql)) {
      // Generate JavaScript alert code
      $alertMessage = "Form submitted successfully!";
      echo "<script>alert('$alertMessage');</script>";
  } else {
    // Error in database query
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}

  mysqli_close($conn);
}
?>
