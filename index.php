 <?php require("script.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<title></title>
</head>
<body>
	<h1>Contact Form</h1>
 	
	<form method="POST" action="script.php">
		<label>Your Email</label>
		<input type="email" name="email" value="mail@mail.com">
		<label>Subject</label>
		<input type="text" name="subject" value="Please add a subject">
		<label>Enter Your Message</label>
		<textarea name="message" id="" cols="30" rows="10"></textarea>

		<input type="submit" name="submit" value="SEND US" class="button">

		<p class="success" >
			<?php echo @$success ?>
		</p>
		<p class="error" >
			<?php echo @$error ?>
		</p>
		
	</form>

</body>
</html>