<?php
	include "header.php";
?>

<section class="add-student">
	<div class="container">
		<div class="row">
       <div class="col-md-8">
		   <div class="heading-part">
		   <h1>Register New User</h1>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate similique aperiam dolorem dolore sapiente quod corrupti neque? Accusamus, expedita pariatur.</p>
		   <a href="home.php" class="btn btn-primary btn-sm py-2">Back To Home</a>
		   </div>
	   </div>

			<div class=" col-sm-4">
				<div class="form-container">
				<form action="" method="POST">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" autocomplete="off" >
					</div>

					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" class="form-control" autocomplete="off" >
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" autocomplete="off" >
					</div>

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" autocomplete="off" >
					</div>

					<div class="form-group">
						<input type="submit" name="register" class="btn btn-primary btn-sm reg-btn" value="Register">
						
					</div>
				</form>
				</div>

				<?php

					$error_Message = "";

					if ( isset($_POST['register']) ){
						$fullname 	= $_POST['fullname'];
						$email 		= $_POST['email'];
						$phone 		= $_POST['phone'];
						$address 	= $_POST['address'];

						if ( empty($fullname) || empty($email) || empty($phone) || empty($address) ){
							$error_Message = '<div class="alert alert-danger">Please Provide Your Information Perfectly.</div>';
							echo $error_Message;
						}
						else{
							$query = "INSERT INTO students (name, email, phone, address) VALUES ('$fullname', '$email', '$phone', '$address')";

							$add_student = mysqli_query($connection, $query);
							
							if ( $add_student ){
								header("Location: index.php");
							}
							else{
								die("MySqli Query Failed". mysqli_error($connection));
							}

						}
					}

				?>

			</div>
		</div>
	</div>
</section>

<?php
	include "footer.php";
?>