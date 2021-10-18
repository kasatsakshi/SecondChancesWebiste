<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<title>Admin Login - Second Chances</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/admin.css" rel="stylesheet" type="text/css">	
</head>
<body class="admin-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Admin Login - Second Chances</h1>
			<form class="form-horizontal admin-container second-chances-login-form margin-bottom-30" role="form" action="login-validation.php" method="post">				
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="email" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="username" name="username" placeholder="Username">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		            </div>
		          </div>
		        </div>
		         <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="Log in" class="btn btn-warning">
		          		<br><br>
		          		    <?php
		                    if(isset($_SESSION["error"])){
		                        $error = $_SESSION["error"];
		                        echo "<span>$error</span>";
		                    }
		                ?> 
		          	</div>
		          </div>
		        </div>
		      </form>
		</div>
	</div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>