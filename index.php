<?php
  include "header.php";
?>

   

    <section class="main-table">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-dark pro-table">
              <thead>
                <tr>
                  <th scope="col">Sl.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

              <?php
                
                $query = "SELECT * FROM students";

                $all_std_list = mysqli_query($connection, $query);
                $i = 0;
                while( $row = mysqli_fetch_assoc($all_std_list) ){
                  $std_id   = $row['std_id'];
                  $name     = $row['name'];
                  $email    = $row['email'];
                  $phone    = $row['phone'];
                  $address  = $row['address'];
                  $i++;
                ?> 

                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $phone; ?></td>
                  <td><?php echo $address; ?></td>
                 
                  <td>
                  <div class="btn-group">
                  <a href="update-student.php?update=<?php echo $std_id;?>" class="btn btn-success btn-sm">Update</a>
                  <a href="index.php?delete=<?php echo $std_id;?>" class="btn btn-danger btn-sm">Delete</a>
                  
                  </div>
                  </td>
                  
                </tr>

              <?php  }

              ?>  

                
                
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
      <a href="add-student.php" class="btn btn-primary btn-sm pro-btn">Register New Student</a>
    </section>
  
   
   
    <?php
   
   if ( isset($_GET['delete']) ) {
    $the_std = $_GET['delete'];

    $query = "DELETE FROM students WHERE std_id = '$the_std' ";

    $delete_student = mysqli_query($connection, $query);

    if ( $delete_student ){
      header("Location: index.php");
    }
    else{
      die("MySqli Query Failed". mysqli_error($connection));
    }

   }


?>
    <?php
  include "footer.php";
?>










































































