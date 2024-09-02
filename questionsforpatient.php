<?php include 'config.php'?>
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
      if(isset($_POST['finish']))
      {
  $marks = mysqli_real_escape_string($conn, $_REQUEST['marks']);
  
  $sql_t = "SELECT * FROM patient WHERE email='$email'";
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
  $sql = "INSERT INTO doctor (doctor_name,doctor_position,doctor_contact,doctor_email,doctor_password)
  VALUES ('$fullname','$position','$phone', '$email',PASSWORD('$password'))";
  
  if(mysqli_query($conn, $sql)){
  
      echo '<script>alert("Doctor Successfully Added")</script>';
  echo "<script type='text/javascript'>
  window.setTimeout('closeHelpDiv();', 3000);
  
  function closeHelpDiv(){
  document.getElementById('helpdiv').style.display=' none';
  }
  </script>";
  
  
  
  } else{
    echo '<script>alert("Doctor failed to be Added")</script>';
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
      }}}
      ?>
   
    <!-- offcanvas -->
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">
            <h4>QUESTIONS TO ANSWER</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-hospital text-center">MENTAL HEALTH SUPPORT</i></span> 
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="POST">
                <table id="example" class="table" style="width: 100%" >
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Question</th>
                        <th>Always</th>
                        <th>Sometimes</th>
                        <th>Never</th>
                        <?php
						$sql = "SELECT * FROM questionnaire ORDER BY quest_id ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$quest_id=$row["quest_id"];  
									$Question=$row["Question"];  
																										
							?>	
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $quest_id ?></td> 
                      <td><?php echo $Question ?></td> 
                      
                      <td><input class="form-check-input" type="radio" name="mark" value="3" id="flexRadioDefault1" required>
                     </td>
                      <td><input class="form-check-input" type="radio" name="mark" value="3" id="flexRadioDefault1" required>
                     </td>
                      <td><input class="form-check-input" type="radio" name="mark" value="3" id="flexRadioDefault1" required>
                     </td>
                    </tr>
                     <?php }} else {
    echo "0 results";
}

$conn->close(); ?>
                      
                    </tbody>
                  </table>
                  <?php echo $quest_id.".  ". $Question ?>&nbsp<input class="form-check-input" type="radio" name="marks" value="3" id="flexRadioDefault1" required>Always
                  <input class="form-check-input" type="radio" name="marks" value="2" id="flexRadioDefault1" required>Sometimes
                  <input class="form-check-input" type="radio" name="marks" value="1" id="flexRadioDefault1" required>Never
                  <br><input style="float-right:10px" type="submit" value="Finish" name="finish" class="btn btn-danger">
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
