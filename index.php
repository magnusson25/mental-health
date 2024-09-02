<?php include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styleindex.css">
    <style>
          .alerte {
  padding: 10px;
  background-color: #f44336;
  color: white;
}
    </style>
</head>
<body>
<?php
if(isset($_POST['register']))
    {
$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$phone= mysqli_real_escape_string($conn, $_REQUEST['phone']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$address= mysqli_real_escape_string($conn, $_REQUEST['address']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$contactprefer = mysqli_real_escape_string($conn, $_REQUEST['contactprefer']);
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['email']=$email;
$_SESSION['gender']=$gender;
// Attempt insert query execution
$currentDate = date("d-m-Y");

$age = date_diff(date_create($dob), date_create($currentDate));

$myage=$age->format("%y");
echo $myage;
if($myage>35 or $myage<18){
   
    echo '<script>alert("you are not allowed to apply")</script>';
   } 
   else{

  $sql = "INSERT INTO patient (patient_firstname,patient_lastname,patient_email,patient_dob, patient_gender,patient_address,patient_phone,contact_method)
VALUES ('$firstname','$lastname','$email','$dob', '$gender','$address','$phone','$contactprefer')";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Information Successfully recorded. Please continue with the Questions")</script>';
 header("Location: steps.php");

} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
    }
?>
 
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heart"></i> Mental <span style="color: red;">Health</span> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="#book">Register</a>
        <a href="#review">review</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/mentalhealth.jpg" alt="">
    </div>

    <div class="content">
        <h3>A Healthy Mind, A Healthy Body</h3>
        <p>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</p>
        
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>70+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>150+</h3>
        <p>satisfied patients</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Over the course of your life, if you experience mental health problems, your thinking, mood, and behavior could be affected.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Online Therapy</h3>
            <p>Experiencing severe mood swings that cause problems in relationships.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-plus-square"></i>
            <h3>Advice</h3>
            <p>
            Feeling unusually confused, forgetful, on edge, angry, upset, worried, or scared
            </p>
            <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>The Health Related Quality of Life (HRQOL) program in CDC’s Division of Population Health provides expertise and support in population HRQOL and well-being assessment to CDC, states, communities, and other public health partners. The primary responsibilities for the program are to carry out surveillance and dissemination of HRQOL and well-being outcomes in the United States using state and national surveys. The program’s other responsibilities include carrying out epidemiological studies, assessing risk factors and health disparities associated with HRQOL and well-being, disseminating these findings, and partnering with the academic community on research development (studies, methodology, data, and sample software syntax) for CDC’s HRQOL and well-being measures.</p>
            <p>Well-being is a positive outcome that is meaningful for people and for many sectors of society, because it tells us that people perceive that their lives are going well. Good living conditions (e.g., housing, employment) are fundamental to well-being. Tracking these conditions is important for public policy.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/csm_30_Karigire_claudine_95a7370f1c.jpg" alt="">
            <h3>Rosette Kelia</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/csm_29_Egide_BUREGEYA_8b468902b6.jpg" alt="">
            <h3>Emmy Magnusson</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/First-Neuro-Surgeon-.jpg" alt="">
            <h3>Kabanda Sam</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/mucu_RzSz6dh.jpg" alt="">
            <h3>Fredie Andrews</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/images.jpg" alt="">
            <h3>FP Jones</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/download.jpg" alt="">
            <h3>Edgar Evernever</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- Registration section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>register</span> now </h1>    

    <div class="row">
        <form action="" method="POST">
            <h3>Register Here</h3>
            <input type="text" placeholder="First Name" class="box" name="firstname" required>
            <input type="text" placeholder="Last Name" class="box" name="lastname" required>
            <input type="date" placeholder="Age" class="box" name="dob" required>
            <input type="email" placeholder="Your email" class="box" name="email">
            <select class="box" required name="gender">
                                                  <option value="">-- Choose Gender--</option>
                                                  <option value="Female">Female</option>
                                                  <option value="Male">Male</option>
                                                </select>
            <input type="text" placeholder="your address" class="box" name="address" required>
            <input type="text" placeholder="Telephone number" class="box" name="phone" required>
            <select class="box" required name="contactprefer">
                                                  <option value="">-- Contact Prefer--</option>
                                                  <option value="call">call</option>
                                                  <option value="mail">mail</option>
                                                  <option value="message">message</option>
                                                </select>

            <select class="box" required name="paymentmethod">
                                                  <option value="">-- Payment Method--</option>
                                                  <option value="momo">Mobile Money</option>
                                                  <option value="visa">Visa card</option>
                                                 
                                                </select>                                    
            <input type="submit" value="Register" name="register" class="btn" >
        </form>

    </div>

</section>

<!-- Registration section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Patient's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/SHARON-e1620306573259-p6rpz1r2zcpayr51r66vpsdvwdnokr4uowow2oz9tc.jpg" alt="">
            <h3>Nezerwa Ines</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I’ve been told that I should never let a mental health diagnosis consume my identity, but anxiety has been with me since my earliest memories. How else could I possibly describe myself?

When I was a child, I had to stop attending preschool because I couldn’t “handle it” emotionally. Throughout elementary school, and even some of middle school, I would cry and visit the nurse nearly every day with stomachaches. Back then, we didn’t have open discussions about mental health.</p>
        </div>

        <div class="box">
            <img src="image/women-e1519647013556-1.jpg" alt="">
            <h3>Umwaliwase Digne</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I am thankful to know that there is nothing medically major wrong with me, but I’m frustrated that there is no “simple cure” to “correct my brain.” My doctor has experimented with my medication doses and tried different treatments over the last year and a half, and I am constantly working on my thoughts with my therapist.</p>
        </div>

        <div class="box">
            <img src="image/ghana-teenage-boy-africa-211351-wallpaper.jpg" alt="">
            <h3>Ngabo Patrick</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"> I realized that I’ve spent so much time trying to rid myself of anxiety, that I haven’t let myself simply live with it. Now I’m attempting to find that balance — to allow the anxiety to exist and to find contentment in the small victories when I push through.</p>
        </div>

    </div>

</section>

<!-- review section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Online Therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Advice </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Meet the Doctor </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +250 786 153 764 </a>
            <a href="#"> <i class="fas fa-phone"></i> +250 786 730 201 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ntakitakoze@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> umugwanezaedith1@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kigali, Rwanda </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Mental health</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/scriptindex.js"></script>

</body>
</html>