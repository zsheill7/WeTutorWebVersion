<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <style type="text/css">
    	.container {
    		text-align: center;
    		width: 400px;
    		margin-top: 75px;
    	}

    	.white {
    		color: white;
    	}

    	.header {
    		font-size: 60px;
    	}

    	.subheader {
    		font-size: 25px;
    	}

    	html { 
		  background: url(img/change.jpeg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

		body {
			background: none;
		}

		#logInForm {
			display: none;
		}
    </style>
  </head>
  <body>

    <div class="container">
    	

    	<h1 class="white header">WeTutor</h1>
    	<h3 class="white subheader">Find quality tutors near you</h3>
   
    	<br>
		<!--<div id="error"><?php echo $error; ?></div>-->

		<form method="post" id="signUpForm">
			<div class="form-group">
				<input id='email'  class="form-control" type="email" name="email" placeholder="Your Email">
			</div>

			<div class="form-group">
				<input id='password' class="form-control" type="password" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="stayLoggedIn" value=1> Stay Logged In
						</input>
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<input id='signUp' class="btn btn-success" type='submit' name="submit" value='Sign Up'>
			</div>

			<p><a class="toggleForms" href="javascript:void(0)">Log In</a></p>
		</form>

		<form method="post" id="logInForm">
			<div class="form-group">
				<input id='email' class="form-control" type="email" name="email" placeholder="Your Email">
			</div>

			<div class="form-group">
				<input id='password' class="form-control" type="password" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="stayLoggedIn" value=1> Stay Logged In
						</input>
					</label>
				</div>
			</div>
			<div class="form-group">
				<input id='logIn' class="btn btn-success" type='submit' name="submit" value='Log In'>
			</div>
			<p><a class="toggleForms" href="javascript:void(0)">Sign Up</a></p>

		</form>

	</div>


   <?php include("footer.php"); ?>
   <?php include("firebase.php"); ?>