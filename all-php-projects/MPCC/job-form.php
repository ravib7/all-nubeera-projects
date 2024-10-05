<?php
// require('connection.php');
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
</head>

 <body>


 <!-------------------------Navbar-start---------------------------->

 <nav>
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
 
<!-------------------------Navbar-End---------------------------->
  
  <h2>Job Application Form</h2>
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
        <label for="taluka">Taluka :</label>
        <input type="text" class="form-control" id="taluka" name="taluka" required>
       </div>
      </div>

      <div class="col-sm-4">
       <div class="form-group">
        <label for="district">District :</label>
        <input type="text" class="form-control" id="district" name="district" required>
       </div>
      </div>

      <div class="col-sm-4">
       <div class="form-group">
        <label for="state">State :</label>
        <input type="text" class="form-control" id="state" name="state" required>
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
        <label for="address">Complete Address :</label>
        <input type="text" class="form-control" id="address" name="address" required>
       </div>
      </div>
      
      <div class="col-sm-4">
        <div class="form-group">
        <label for="photo">Upload Photo:</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
      </div>
      </div>
      
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="register">Submit</button>
  </div>
    </div>
    </form>
  </div>
</body>
</html>

