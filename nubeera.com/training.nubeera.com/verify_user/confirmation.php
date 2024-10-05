<?php

	if(!isset($_GET['email']) or !isset($_GET['verification_token'])){
		header('Location: ../index.php');
		die();
	}else{
		$email = $_GET['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header('Location: ../index.php');
			die();
		}else{
			include_once '../database/db.php';
			$obj = new DB();
			$con = $obj->db_connect();
			if(!$con){
				echo "Something Went Wrong";
				sleep(5);
				header('Location:../index.php');
				die();
			}else{
				
				$verification_code = $_GET['verification_token'];
				$sql = ("SELECT is_verified, verification_code FROM users WHERE email=?;");
				$stmt = mysqli_stmt_init($con);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					echo "SQL Statement Failed";
				}else{
					mysqli_stmt_bind_param($stmt,'s', $email);
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					$row = mysqli_fetch_assoc($result);
					if($row['is_verified']){
						echo 'Verification Link Expired';
					}else{
						if($row['verification_code'] == $verification_code){
							$sql2 = 'update users set is_verified=1 where email="'.$email.'";';
							mysqli_query($con, $sql2);
							header('Location:../login/index.php?verified=Success');
							die();
						}else{
							echo 'Don\'t Play Here';
						}
					}
				}
			}
		}
	}
	
?>