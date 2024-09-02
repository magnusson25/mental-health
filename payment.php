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
<form action="https://afripay.africa/checkout/index.php" method="post" id="afripayform">

<input type="hidden" name="amount" value="1000" >

<input type="hidden" name="currency" value="RWF" >

<input type="hidden" name="comment" value="Order 122">

<input type="hidden" name="client_token" value="" >

<input type="hidden" name="return_url" value="https://www.kibinapay.com" >

<input type="hidden" name="firstname" value="" >

<input type="hidden" name="lastname" value="" >

<input type="hidden" name="street" value="" >

<input type="hidden" name="city" value="" >

<input type="hidden" name="state" value="" >

<input type="hidden" name="zip_code" value="" >

<input type="hidden" name="country" value="" >

<input type="hidden" name="email" value="" >

<input type="hidden" name="phone" value="" >

<input type="hidden" name="app_id" value="143b342a2c1359ce58579e53c51cee5c">

<input type="hidden" name="app_secret" value="JDJ5JDEwJEVDenJO">

<input type="submit" name="submit" value="Pay with AfriPay" onclick="document.afripayform.submit();">

</form> 

	<script src=""></script>

</body>
</html>