<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Mental Health Matters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title bar logo-->
    <link rel="icon" href="login-logo.jpg" type="image/icon type">
    <!--Google font link-->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!--Bootstrap 4 links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--External CSS-->
    <link href="login-style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="padding main-content-3">
            <div class="card-deck">
                <div class="card">
                  <div class="card-body text-center">
                      <h4 class="card-title">Login</h4>
                      <?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						?>
                      <form action="signin.php" method="post">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                          </div>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                          <input type="password" class="form-control" placeholder="" id="pwd" name="password" required>
                          <div class="input-group-append">
                            <span class="input-group-text">Password</span>
                          </div>
                        </div>
                      <input type="submit" name="loginbtn" value="Login" id="r-button">
                      </form>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body text-center">
                    <h4 class="card-title">Signup</h4>
                    <?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
					?>
                    <form method="post" action="signup.php">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                          </div>
                          <input type="text" class="form-control" id="name" name="username" required>
                        </div>
                        <div class="input-group mb-3">
                          <input type="email" class="form-control" id="email" name="email" required>
                          <div class="input-group-append">
                            <span class="input-group-text">Email</span>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Password</span>
                            </div>
                            <input type="password" class="form-control" id="pwd" name="password" required>
                          </div>
                        <input type="submit" name="registerbtn" value="Register" id="r-button">
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!--
	<div class="container">
		<div class="row">
			     <div class="col-sm-6 padding">
					  <div class="panel panel-info">
                      <div class="panel-heading">Signin Form</div>
						<div class="panel-body">
						<!--<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="@email.com">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6 padding">
							<div class="panel panel-info">
								
								<div class="panel-heading">Signup Form</div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="name">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email" class="form-control" name="e" id="email" placeholder="@email.com">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   
-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
