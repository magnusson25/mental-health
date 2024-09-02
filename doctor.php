<?php include 'config.php'; ?>
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
    <!-- top navigation bar -->
    <?php include 'navbar.php'?>
    <!-- top navigation bar -->
    <!-- offcanvas -->
   <?php include 'menu.php';?>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>DOCTORS PAGE</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-person-badge-fill me-2"> Doctors Data Table</i></span> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table" style="width: 100%" >
                    <thead>
                      <tr>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Doctor Position</th>
                        <th>Doctor Email</th>
                        <?php
						$sql = "SELECT * FROM user_registration WHERE user_type='Doctor' ORDER BY user_id ASC ";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$user_id=$row["user_id"];  
									$fullname=$row["fullname"];  
									$position=$row["position"]; 
									$email=$row["email"];
																		
							?>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td><?php echo $user_id ?></td> 
                      <td><?php echo $fullname ?></td> 
                      <td><?php echo $position ?></td> 
                      <td><?php echo $email ?></td> 
                     </tr>
                     <?php }} else {
    echo "0 results";
}

$conn->close(); ?>
                      
                    </tbody>
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
