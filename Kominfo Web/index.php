<?php session_start();?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>LOGIN</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Student Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/style2.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--online fonts-->
	<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!--//online fonts-->
</head>

<body>
	    <?php
       if(isset($_POST['username']) && isset($_POST['password'])){
    	 $username = $_POST['username'];
    	 $password = $_POST['password'];
    	 $connection = new mysqli('localhost', 'root', '', 'apa');

    	 $check= " SELECT * FROM login WHERE username='$username' and password='$password'";
			$resultcheck=$connection->query($check);

		if ($resultcheck->num_rows):$_SESSION['username'] = $username; 
    	 ?>
    	 Login berhasil...

    	<script> window.location = 'browse.php'; </script>

    	<?php 
    		elseif ($username == "admin" && $password == "admin"): $_SESSION['username']=$username ?>
    			<script> window.location = 'browse_admin.php'; </script>
    		

    	<?php else: ?>
    	  <script>alert("Username atau password anda salah!");
    	  window.location = 'index.php';</script>
  	 <?php endif;
      }
      else{
      ?>

	<h1> Login Data Statistic Dinas Kominfo Ngawi</h1>
	<div class="w3ls-login box">
		<img src="images/Ngawi.png" alt="logo_img" width="600px" height="auto">
		<!-- form starts here -->
		<form action="#" method="post">
			<div class="agile-field-txt">
				<input type="username" name="username" placeholder="Username"/>
			</div>
			<div class="agile-field-txt">
				<input type="password" name="password" placeholder="Password" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password">
					<label class="check" for="check3">Remember me</label>
				</div>
			</div>
			<div class="w3ls-bot">
				<input type="submit" value="LOGIN">
			</div>
		</form>
	</div>	
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2018 PKL UB. All Rights Reserved.| Design by</p>
	</div>
	<!--//copyright-->
	<?php } ?>
</body>

</html>