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
    <title>MENTAL HEALTH | DOCTOR DASHBOARD</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <?php include 'navbar.php'?>
    <!-- top navigation bar -->
    <!-- offcanvas -->
   <?php include 'doctormenu.php';?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>DOCTOR PAGE</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"> Patient Data Table</i></span> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped data-table" style="width: 100%" >
                    <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Gender</th>
                        <th>Patient DoB</th>
                        <th>Patient Phone</th>
                        <th>Patient Marking level</th>
                        <th>doctor postion</th>
                        <?php
						$sql = "SELECT * FROM patient ORDER BY patient_id ASC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$user_id=$row["patient_id"];  
									$fname=$row["patient_firstname"];  
                  $lname=$row["patient_lastname"]; 
									$dob=$row["patient_dob"]; 
                  $contact=$row["patient_phone"]; 
									$email=$row["patient_email"];
                  $gender=$row["patient_gender"];	
                  $marks=$row["Answers"];
                  $doctorp=$row["doctor_postion"];
                  
							?>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td><?php echo $user_id ?></td> 
                      <td><?php echo $fname." ".$lname ?></td> 
                      <td><?php echo $email ?></td> 
                      <td><?php echo $gender ?></td> 
                      <td><?php echo $dob ?></td> 
                      <td><?php echo $contact ?></td> 
                      <td><?php echo $marks ?></td> 
                      <td><?php echo $doctorp ?></td> 
                     </tr>
                     <?php }} else {
    echo "0 results";
}

$conn->close(); ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Gender</th>
                        <th>Patient DoB</th>
                        <th>Patient Phone</th>
                        <th>doctor postion</th>
                      </tr>
                    </tfoot>
                    </table>
                </div>
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
 