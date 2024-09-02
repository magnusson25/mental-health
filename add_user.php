<?php include 'config.php'; ?>
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
      if(isset($_POST['add_user']))
      {
  $fullname = mysqli_real_escape_string($conn, $_REQUEST['fullname']);
  $phone= mysqli_real_escape_string($conn, $_REQUEST['phone']);
  $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
  $password= mysqli_real_escape_string($conn, $_REQUEST['pswd']);
  $user_type= mysqli_real_escape_string($conn, $_REQUEST['user_type']);
  
  $sql_t = "SELECT * FROM user_registration WHERE email='$email'";
      if ($conn->query($sql_t) ==TRUE) {
      $result = mysqli_query($conn,$sql_t) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if($rows>0){
      echo "echo '<script>alert('Email already exist')</script>';";
  echo "<script type='text/javascript'>
  window.setTimeout('closeHelpDiv();', 3000);
  
  function closeHelpDiv(){
  document.getElementById('helpdiv').style.display=' none';
  }
  </script>";
  
      }
      else{
  // Attempt insert query execution
  $sql = "INSERT INTO user_registration (fullname, email,phone,PASSWORD,user_type)
  VALUES ('$fullname', '$email','$phone',PASSWORD('$password'),'$user_type')";
  
  if(mysqli_query($conn, $sql)){
  
      echo '<script>alert("User Successfully Created")</script>';
  echo "<script type='text/javascript'>
  window.setTimeout('closeHelpDiv();', 3000);
  
  function closeHelpDiv(){
  document.getElementById('helpdiv').style.display=' none';
  }
  </script>";
  
  
  
  } else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
      }}}
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
            <h4> NEW USER PAGE</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-person me-2"></i>NEW USER</span> 
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">USER FULLNAME</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="fullname" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">USER CONTACT</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="phone" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">USER EMAIL</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control mb-2" id="tags" name="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2"  for="tags">USER PASSWORD</label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control mb-2" id="tags" name="pswd" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2 mb-2">USER-TYPE</label>
                        <div class="col-lg-8">
                          <select class="form-control mb-2" required name="user_type">
                                                  <option value="">- Choose Position -</option>
                                                  <option>Admin</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="add_user">Add</button>
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
