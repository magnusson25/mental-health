<?php
include 'config.php';
?>
<?php  
session_start();
if($_SESSION['email']){
	session_destroy();
	header("location:login.php");
}else{
  header("location:login.php");
}
date_default_timezone_set('Canada/Pacific');
$ldate=date( 'd-m-Y h:i:s A', time () );

$sql = "UPDATE user_logs  SET LOGOUT_TIME = '$ldate' WHERE email = '".$_SESSION['email']."'"; 
if(mysqli_query($conn, $sql)){  

session_destroy();  
header("Location: login.php"); }

$sqle = "SELECT * FROM user_logs where email= '".$_SESSION['email']."'";
						$result = $conn->query($sqle);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$email=$row["email"];  
									$login=$row["LOGIN_TIME"];  
									$logout=$row["LOGOUT_TIME"];  }}
  
wh_log("  User : '". $email);
wh_log("   ;Start Login time : '" . $login . "';");
wh_log("   END Logout time : '" . $logout . "'");

 
function wh_log($email)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) 
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
    file_put_contents($log_file_data, $email . "\n", FILE_APPEND);
						}

 
?>