<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Mental Health</title>
    <style>
        body
        {
            background:rgb(219,226,226);
        }
        .row
        {
            background: white;
            border-radius: 30px;
            box-shadow:12px 12px 22px grey;
        }
        img
        {
            border-top-left-radius:30px;
            height:auto;
            max-width:100%;
        }
        .btn1
        {
            border:none;
            outline:none;
            height:50px;
            width:100%;
            background-color: black;
            color:white;
            border-radius:4px;
            font-weight:bold;
        }
        .btn1:hover
        {
            background:white;
            border:1px solid;
            color: black;
        }
        .alerte {
  padding: 10px;
  background-color: #f44336;
  color: white;
}   
    </style>
  </head>
  <body>
      <?php
      include 'config.php';
?>
<?php
      if(isset($_POST['login'])){
          $email= $_POST['email'];
          $password=$_POST['password'];
          $qz="SELECT * FROM user_registration WHERE email='".$email."' and password=PASSWORD('".$password."')";
          $qz = str_replace("\'","",$qz);
          $result = mysqli_query($conn,$qz);
          $rows= mysqli_num_rows($result);
          if($rows==1){
              while($row = mysqli_fetch_array($result)){
                  if($row['user_type']=="Admin"){
                      $sql="INSERT INTO user_logs (email) VALUES ('$email')";
                      if(mysqli_query($conn,$sql)){
                          header("Location: admin_dashboard.php");
                          $_SESSION['name']=$row['fullname'];
                          $_SESSION['type']=$row['user_type'];
                          $_SESSION['email']=$row['email']; 
                          $_SESSION['user']=$row['user_id'];
                          $_SESSION['password']=$row['password'];
                      }
                  }
                  else{
                    $qzs="SELECT * FROM user_registration WHERE email='".$email."' and password=PASSWORD('".$password."')";
                    $qzs = str_replace("\'","",$qzs);
                    $results = mysqli_query($conn,$qzs);
                    $rowz= mysqli_num_rows($results);
                        if($rowz==1){
                            $sqle="INSERT INTO user_logs (email) VALUES ('$email')";
                            if(mysqli_query($conn,$sqle)){
                              header("Location: doctor_dashboard.php");
                              $_SESSION['name']=$row['fullname'];
                              $_SESSION['type']=$row['user_type'];
                              $_SESSION['doctorpostion']=$row['position'];
                              $_SESSION['email']=$row['email']; 
                              $_SESSION['user']=$row['user_id'];
                              $_SESSION['password']=$row['password']; 
                        }
                     
                  }}
              }}
          else{
            echo '<script>alert("Invalid Email/Password")</script>';
            echo "<script type='text/javascript'>
                window.setTimeout('closeHelpDiv();', 3000);
                 function closeHelpDiv(){
                    document.getElementById('helpdiv').style.display=' none';
                        }
                </script>";
        }
      }
      mysqli_close($conn);
      ?>
    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="image/mentalhealth.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 px-5 pt-2 " >
                    <h1 class="font-weight-bold py-2">Mental Health</h1>
                    <h4>Sign into your account</h4>
                    <form  action="" method="POST" autocomplete="off">
                        <div class="form-row">
                            <div class="col-lg-8">
                                <input type="email" id="email" name="email" placeholder="Email-address" class="form-control my-3 p-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-8">
                                <input type="password" id="password" name="password" placeholder="********" class="form-control my-3 p-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-8">
                                <button class="btn1 mt-2 mb-5" name="login">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>