<?php
	include "header.php";
?>
<?php
	if ( isset($_GET['update']) )
	{
		$update_std_id = $_GET['update'];
		$query = "SELECT * FROM students WHERE std_id = '$update_std_id'";
		$the_std = mysqli_query($connection, $query);
		while( $row = mysqli_fetch_assoc($the_std) ){
			$up_std_id   	= $row['std_id'];
          	$name     		= $row['name'];
          	$email    		= $row['email'];
          	$phone    		= $row['phone'];
          	$address  		= $row['address'];
          	?>
<section class="update-std">
	<div class="container">
		<div class="row">
		<div class="col-md-8">
		   <div class="heading-part">
		   <h1>Update Registered User</h1>
		   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate similique aperiam dolorem dolore sapiente quod corrupti neque? Accusamus, expedita pariatur.</p>
		   <a href="home.php" class="btn btn-primary btn-sm py-2">Back To Home</a>
		   </div>
	   </div>
			<div class="col-sm-4">
			<div class="form-container">
				<form action="" method="POST">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" autocomplete="off" value="<?php echo $name; ?>">
					</div>

					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" class="form-control" autocomplete="off" value="<?php echo $email; ?>">
					</div>

					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" autocomplete="off" value="<?php echo $phone; ?>" >
					</div>

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" autocomplete="off" value="<?php echo $address; ?>">
					</div>

					<div class="form-group">
						<input type="submit" name="update" class="btn btn-primary btn-sm reg-btn" value="Update">
					</div>
				</form>
		</div>

			</div>
		</div>
	</div>
</section>
	<?php }
	}	
?>



<?php

	$error_Message = "";

	if ( isset($_POST['update']) ){
		$fullname 	= $_POST['fullname'];
		$email 		= $_POST['email'];
		$phone 		= $_POST['phone'];
		$address 	= $_POST['address'];

		if ( empty($fullname) || empty($email) || empty($phone) || empty($address) ){
			$error_Message = '<div class="alert alert-danger">Please Provide Your Information Perfectly.</div>';
			echo $error_Message;
		}
		else{
			$query = "UPDATE students SET name='$fullname', email='$email', phone='$phone', address='$address' WHERE std_id = '$up_std_id';  ";

			$update_data = mysqli_query($connection, $query);

			if ( $update_data ){
				header("Location: index.php");
			}
			else{
				die("MySqli Query Failed". mysqli_error($connection));
			}

			
			
			

		}
	}

?>




<?php
	include "footer.php";
?>