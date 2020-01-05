<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['comment'];
if (isset($_POST['submit'])){
if(isset($_POST['g-recaptcha-response'])){
//your site secret key

$secret = 'YOUR_SECRET_KEY_GOES_HERE';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success){
     // DO SOMETHING IF RESPONSE IS SUCCEFULL

} else {
     // IF RESPONSE NOT IS SUCCEFULL DO SOMETHING ELSE

	}
} else {
    // DO SOMETHING IF CAPTCHA ITS EMPTY

	}
} 

?>