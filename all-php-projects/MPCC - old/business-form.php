<!DOCTYPE html>
<html>
<head>
  <title>Business Application Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style-2.css">
</head>

<body>
  
  <h2>Business Application Form</h2>
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


