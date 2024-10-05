<?php
require('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SL NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>DATA OF BIRTH</th>
						<th>PHONE</th>
						<th>ALT. PHONE</th>
						<th>AD. CARD NO.</th>
						<th>GENDER</th>
						<th>CAST</th>
						<th>JOBS</th>
						<th>STATE</th>
						<th>DISTRICT</th>
                        <th>CITY</th>
						<th>ADDRESS</th>
						<th>ACTION</th>

                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM `job-form`");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["birthday"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["aphone"]; ?></td>
					<td><?php echo $row["aadhaar"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["cast"]; ?></td>
					<td><?php echo $row["job"]; ?></td>
					<td><?php echo $row["state"]; ?></td>
					<td><?php echo $row["district"]; ?></td>
					<td><?php echo $row["city"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["name"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
							data-birthday="<?php echo $row["birthday"]; ?>"
							data-phone="<?php echo $row["phone"]; ?>"
							data-aphone="<?php echo $row["aphone"]; ?>"
							data-aadhaar="<?php echo $row["aadhaar"]; ?>"
							data-gender="<?php echo $row["gender"]; ?>"
							data-cast="<?php echo $row["cast"]; ?>"
							data-job="<?php echo $row["job"]; ?>"
							data-state="<?php echo $row["state"]; ?>"
							data-district="<?php echo $row["district"]; ?>"
							data-city="<?php echo $row["city"]; ?>"
							data-address="<?php echo $row["address"]; ?>"
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>

	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label>DATA OF BIRTH</label>
							<input type="data" id="birthday" name="birthday" class="form-control" required>
						</div>

						<div class="form-group">
							<label>PHONE</label>
							<input type="number" id="phone" name="phone" class="form-control" required>
						</div>		

						<div class="form-group">
							<label>ALT.PHONE</label>
							<input type="number" id="aphone" name="aphone" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>AD.CARD NO.</label>
							<input type="text" id="aadhaar" name="aadhaar" class="form-control" required>
						</div>	

						<div class="form-group">
                                  <label>Gender :</label>
                                  <select type="select" id="gender" class="form-control" name="gender" required>
                                      <option value="">Select</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Other">Other</option>
                                  </select>
                        </div>

                        <div class="form-group">
                                  <label>CAST</label>
                                  <select type="select" id="cast" class="form-control" name="cast" required>
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

						<div class="form-group">
                                  <label>JOBS</label>
                                  <select type="select" id="job" class="form-control" name="job" required>
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

						<div class="form-group">
							<label>STATE</label>
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

						<div class="form-group">
							<label>DISTRICT</label>
							<select id="district" class="form-control" name="district" required>
                             <option value="">Select District</option>
                            </select>
						</div>	
            							
						<div class="form-group">
							<label>CITY</label>
							<select id="city" class="form-control" name="city" required>
                              <option value="">Select City</option>
                            </select>						
						</div>	

						<div class="form-group">
							<label>COMPLETE ADDRESS</label>
							<input type="text" id="address" name="address" class="form-control" required>
						</div>		

						<!-- <div class="col-sm-4">
                            <div class="form-group">
                                <label for="photo">UPLOAD IMAGE</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>  -->
					</div>

					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Data Of Birth</label>
							<input type="data" id="birthday_u" name="birthday" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Phone</label>
							<input type="number" id="phone_u" name="phone" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Alt.Phone</label>
							<input type="number" id="aphone_u" name="aphone" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Aadhaar</label>
							<input type="text" id="aadhaar_u" name="aadhaar" class="form-control" required>
						</div>	
					
                        <div class="form-group">
                                  <label>Gender :</label>
                                  <select type="select" id="gender_u" class="form-control" name="gender" required>
                                      <option value="">Select</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Other">Other</option>
                                  </select>
                        </div>
                     
                        <div class="form-group">
                                  <label>Cast</label>
                                  <select type="select" id="cast_u" class="form-control" name="cast" required>
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

             <div class="form-group">
               <label>Jobs</label>
               <select class="form-control" id="job_u" name="job" required>
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
						
            			<div class="form-group">
     						<label for="state">State </label>
						    <select id="state_u" class="form-control" name="state" required>
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

						<div class="form-group">
						<label for="district">District </label>
                         <select id="district_u" class="form-control" name="district" required>
                         <option value="">Select District</option>
                         </select>
						</div>	

						<div class="form-group">
						<label for="city">City </label>
                        <select id="city_u" class="form-control" name="city" required>
                        <option value="">Select City</option>
                        </select>
						</div>	
					
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="address_u" name="address" class="form-control" required>
						</div>	

						<!-- <div class="col-sm-4">
                                <div class="form-group">
                                <label for="photo">Upload Photo</label>
                                <input type="file" class="form-control" id="photo_u" name="photo">
                              </div>
                        </div> -->
					</div>

					<div class="modal-footer">
					    <input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="ajax/ajax.js"></script>
	<script src="district-city-script.js"></script>
</body>
</html>                                		                            