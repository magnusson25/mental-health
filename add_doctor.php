<?php include 'config.php'?>
<?php 
session_start();
if($_SESSION['email']){
}else{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>MENTAL HEALTH | ADMIN DASHBOARD</title>
  </head>
  <body>
  <?php
      if(isset($_POST['add_doctor']))
      {
     
  $fullname = mysqli_real_escape_string($conn, $_REQUEST['doctor_name']);
  $phone= mysqli_real_escape_string($conn, $_REQUEST['doctor_phone']);
  $email = mysqli_real_escape_string($conn, $_REQUEST['doctor_email']);
  $position= mysqli_real_escape_string($conn, $_REQUEST['doctor_position']);
  $password= mysqli_real_escape_string($conn, $_REQUEST['doctor_pswd']);
  $percentage= mysqli_real_escape_string($conn, $_REQUEST['doctor_percentage']);
  
  $sql_t = "SELECT * FROM user_registration WHERE email='$email'";
      if ($conn->query($sql_t) ==TRUE) {
      $result = mysqli_query($conn,$sql_t) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if($rows>0){
      echo "<script>alert('Email already exist')</script>";
  
      }
      else{
       
          $fileinfo=PATHINFO($_FILES["image"]["name"]);
          $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
          move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
          $location="upload/" . $newFilename;
          
          $sqle="INSERT INTO user_registration (fullname,position,email,phone,password,doctor_percentage,doctor_image) 
    VALUES ('$fullname','$position','$email','$phone',PASSWORD('$password'),'$percentage','$location')";
          if(mysqli_query($conn, $sqle)){
            echo '<script>alert("Doctor Successfully Added")</script>'; 
      }
      else{
        echo '<script>alert("Doctor failed to be Added")</script>';
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
        }
  // Attempt insert query execution
      }}
      ?>
    <!-- top navigation bar -->
    <?php include 'navbar.php'?>
    <!-- top navigation bar -->
    <!-- offcanvas -->
   <?php include 'menu.php'?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>ADD DOCTOR</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-person-badge-fill me-2"></i>DOCTOR DETAILS</span> 
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR NAME</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="doctor_name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2">POSITION</label>
                        <div class="col-lg-8">
                          <select class="form-control mb-2" name="doctor_position" required>
                                                  <option value="">- Choose Position -</option>
                                                  <option >Therapist Case Manager</option>
                                                  <option >Therapist Clinician Case Manager</option>
                                                  <option >Therapist Case Manager Nursing Director</option>
                                                  <option >Clinician Clinical Supervisor Nursing Director</option>
                                                  <option >Social Worker Team Leader Program Director</option>
                                                </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR CONTACT</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="doctor_phone" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR EMAIL</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="doctor_email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR PASSWORD</label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control mb-2" id="tags" name="doctor_pswd" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR PERCENTAGE</label>
                        <div class="col-lg-8">
                          <input type="number" class="form-control mb-2" id="tags" name="doctor_percentage" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">DOCTOR IMAGE</label>
                        <div class="col-lg-8">
                          <input type="file" class="form-control mb-2" id="tags" name="doctor_picture" required>
                        </div>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="add_doctor">Add</button>
                          <button type="submit" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
