<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Progress Steps</title>
	<link rel="stylesheet" href="style.css">
	<style>
		:root {
    --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
    --border:.2rem solid var(--green);
    --green: #6c7a89;
}

* {
    box-sizing: border-box;
}

body {
    background: url(image/s3.jpg); 
    font-family: Arial, Helvetica, sans-serif;
    align-items: center;
    justify-content: center;
}

form {
    margin-top: 150px;
    padding-top: 30px;
    align-content: center;
    background-color: rgba(0,0,0,0.5);
    width: auto;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    align-items: center;
    text-align: center;
    margin-left: 400px;
    height: 400px;
    width: 500px;
}


.btn {
    width: 100px;
    height: 30px;
    border-radius: 10px;
}

.book .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}

input[type=button] {
    margin-top: 40px;
}


 
	</style>
</head>
<body>
	<?php 
	 if(isset($_POST['tria']))
	 {
 $qn1 = mysqli_real_escape_string($conn, $_REQUEST['qn1']);
 $qn2= mysqli_real_escape_string($conn, $_REQUEST['qn2']);
 $qn3 = mysqli_real_escape_string($conn, $_REQUEST['qn3']);
 $qn4= mysqli_real_escape_string($conn, $_REQUEST['qn4']);
 $qn5= mysqli_real_escape_string($conn, $_REQUEST['qn5']);
 $qn6= mysqli_real_escape_string($conn, $_REQUEST['qn6']);
 $qn7= mysqli_real_escape_string($conn, $_REQUEST['qn7']);
 $qn8= mysqli_real_escape_string($conn, $_REQUEST['qn8']);
 $qn9= mysqli_real_escape_string($conn, $_REQUEST['qn9']);
 $qn10= mysqli_real_escape_string($conn, $_REQUEST['qn10']);

 $tot=$qn1+$qn2+$qn3+$qn4+$qn5+$qn6+$qn7+$qn8+$qn9+$qn10;
 if ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' && $qn6 == '1' && $qn7 == '1' && $qn8 == '1' && $qn9 == '1' && $qn10 == '1') {
 
	$marks="UPDATE `patient` SET `doctor_postion`='Therapist Case Manager', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
		   if(mysqli_query($conn, $marks)){
			   echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
			   header('Location:payment.php');
		   }
		   else{
			   echo '<script>alert("Information Not Successfully recorded.")</script>';
			   header('Location:steps.php');
		   }
 }
 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' && $qn6 == '1' && $qn7 == '1' && $qn8 == '1' && $qn9 == '1') {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Therapist Clinician Case Manager', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }
 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' && $qn6 == '1' && $qn7 == '1' && $qn8 == '1') {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }
 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' && $qn6 == '1' && $qn7 == '1') {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }



 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' && $qn6 == '1') {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }

 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' && $qn5 == '1' ) {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }


 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' && $qn4 == '1' ) {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }


 elseif ($qn1 == '1' && $qn2 == '1' && $qn3 == '1' ) {
	 
	$marks="UPDATE `patient` SET `doctor_postion`='Clinician Clinical Supervisor Nursing Director', `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }

 else {
	 
	$marks="UPDATE `patient` SET `Answers`= $tot ORDER BY patient_id DESC LIMIT 1";
	if(mysqli_query($conn, $marks)){
		echo '<script>alert("Information Successfully recorded. You will be contacted soon by our doctor")</script>';
		header('Location:payment.php');
	}
	else{
		echo '<script>alert("Information Not Successfully recorded.")</script>';
		header('Location:steps.php');
	}
 }
}
	?>
	<center>
		<section class="book">
		<div class="row">
			<form id="row" action="" method="POST">
		<label>Have You Ever Felt Suicidal</label><br> &nbsp;<input type="radio" name="qn1" value="1"> Yes &nbsp;<input type="radio" name="qn1"value="2"> No <br>
		<label>Have You Lost interest in things you used to like</label><br> &nbsp;<input type="radio" name="qn2" value="1"> Yes &nbsp;<input type="radio" name="qn2" value="2"> No <br>
		<label>Have You Ever felt hopeless about your future</label><br> &nbsp;<input type="radio" name="qn3" value="1"> Yes &nbsp;<input type="radio" name="qn3" value="2"> No <br>
		<label>Have You Ever found it difficult to make decisions</label><br> &nbsp;<input type="radio" name="qn4" value="1"> Yes &nbsp;<input type="radio" name="qn4" value="2"> No <br>
		<label>Have You Ever taken drugs</label><br> &nbsp;<input type="radio" name="qn5" value="1"> Yes &nbsp;<input type="radio" name="qn5" value="2"> No <br>
		<label>Have You Ever Felt Suicidal</label><br> &nbsp;<input type="radio" name="qn6" value="1"> Yes &nbsp;<input type="radio" name="qn6"value="2"> No <br>
		<label>Have You Lost interest in things you used to like</label><br> &nbsp;<input type="radio" name="qn7" value="1"> Yes &nbsp;<input type="radio" name="qn7" value="2"> No <br>
		<label>Have You Ever felt hopeless about your future</label><br> &nbsp;<input type="radio" name="qn8" value="1"> Yes &nbsp;<input type="radio" name="qn8" value="2"> No <br>
		<label>Have You Ever found it difficult to make decisions</label><br> &nbsp;<input type="radio" name="qn9" value="1"> Yes &nbsp;<input type="radio" name="qn9" value="2"> No <br>
		<label>Have You Ever taken drugs</label><br> &nbsp;<input type="radio" name="qn10" value="1"> Yes &nbsp;<input type="radio" name="qn10" value="2"> No <br>
	<input type="submit" name="tria" value="submit" class="btn">

	</form>
			
		</div>
		
	</section>
	</center>

	<script src=""></script>

</body>
</html>