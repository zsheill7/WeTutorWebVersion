<?php 
	/*if (isset($_SESSION['username'])) {
		$userLoggedIn = $_SESSION['username'];
	} else {
		header('Location: signup.php');
	}*/
?>
<html>
<head>
	<title>Welcome to WeTutor</title>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
	<div class="top_bar">
		<div class="logo">
			<a href="main.php">WeTutor</a>

		</div>

		<nav>
			<a href="#">
				<i class="fa fa-camera-retro" aria-hidden="true"></i>
			</a>
			<a href="#">Home</a>
			<a href="#">Messages</a>
			<a href="#">Settings</a>
		</nav>
	</div>
</body>
</html>


