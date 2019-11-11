<?php
  include "header.php";
?>

<section class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">CodeHex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
  </div>
</nav>
</div>
</section>

<section class="main-section">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="img-section">
<img src="images/2.svg" class="img-fluid">
</div>
</div>
<div class="col-md-6">
<div class="main-button">
<a href="add-student.php" class="btn btn-primary btn-sm py-2">Register New Student</a>
</div>
</div>



</div>
</div>
</section>


<?php
  include "footer.php";
?>