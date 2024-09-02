<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Easy and Simple Image Upload</title>
<style>
	.container{
		display: flex;
		width:calc(100%);
		flex-wrap: wrap;
	}
	.container img{
	    width: calc(18%);
	    height: 15vw;
	    object-fit: contain;
	    background: gray;
	    border: 1px solid black;
	    margin: 5px;
	}
</style>
</head>
<body>
	
	<h2><strong>Uploaded Images:</strong></h2>
	<div class="container">
	<br>
	<?php
		include('config.php');
		$query=mysqli_query($conn,"select * from user_registration");
		if(mysqli_num_rows($query) > 0){
			while($row=mysqli_fetch_array($query)){
				?>
					<img src="<?php echo $row['doctor_image']; ?>">
				<?php
			}
		}else{
			echo "<p><strong>No Images uploaded yet.</strong></p>";
		}
	?>
	</div>
	<div>
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<label>Image:</label><input type="file" name="image" accept="image/*">
	<button type="submit">Upload</button>
	</form>
	</div>
</body>
</html>