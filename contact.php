<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
	</script>

</head>
<body class="contactBody">   
        <div class="wrapper">
        <div class="title">
           
      
        </div>

        <form class="form" method="POST" action="action.php">
          <input type="text" name="name" class="name entry " placeholder="Your Name"/>
          <input type="text" name="email" class="email entry" placeholder="Email"/>
          <textarea name="message" class="message entry" placeholder="Message"></textarea> 
            <br>
			<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_GOES_HERE"></div>
            <br/>
          <button type="submit" name="submit" class="submit entry" >Submit</button>
        </form>  
        <div class="shadow"></div>
      </div>
<script type="text/javascript">
  var onloadCallback = function() {
  };
</script>
<script>
   function check() {
    if (grecaptcha.getResponse() == "") {
        alert("Please verify captcha details.");
            return false;
    }
    return true;
}


</script>

    <script src="app.js"></script>
</body>
</html>