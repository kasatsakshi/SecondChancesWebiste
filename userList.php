<!DOCTYPE html>
<head>
	<title>Second Chances Users</title>
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
<body>
  	<?php
		ini_set('display_errors', 1);
		require_once __DIR__ . '/database/connection.php';
		$selectQuery = "SELECT * FROM subscribers ORDER BY id DESC";
		$result = $conn->query($selectQuery);
	?>
	<div class="container">
	    <div class="get-quote">
	        <div class="row" style="margin-top: 40px;">
	            <div class="col-sm-10 col-12">
	                <h2>Second Chances Users</h2>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-12 table-responsive">
				<table class="table table-bordered table-striped table-hove">
				    <thead>
				        <tr class="bg-warning">
				            <th>Id</th>
				            <th>First Name</th>
				            <th>Last Name</th>
				            <th>Email Address</th>
				            <th>Home Address</th>
				            <th>Home Phone</th>
				            <th>Cell Phone</th>
				        </tr>
				    </thead>
				    <tbody>
				        <?php 
				        	$count = $result-> num_rows;
					        if($count>0){
					            $n  =   1;
					            while($row = $result->fetch_assoc()){ 
					        ?>
					        <tr>
					            <td><?php echo $row['id']; ?></td>
					            <td><?php echo $row['first_name']; ?></td>
					            <td><?php echo $row['last_name']; ?></td>
					            <td><?php echo $row['email_address']; ?></td>
					            <td><?php echo $row['home_address']; ?></td>
					            <td><?php echo $row['home_phone']; ?></td>
					            <td><?php echo $row['cell_phone']; ?></td>
					        </tr>
					        <?php 
					            }
					        }
					        else {?>
					        <tr>
					            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
					        </tr>
					        $conn->close();
				        <?php } ?>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>