<?php
	session_start();
	ini_set('display_errors', 1);
	require_once __DIR__ . '/database/connection.php';

		$username = $_POST["username"];
		$password = $_POST["password"];
					
		$selectQuery = "SELECT * FROM users where username='" . $username . "'";

		$result = $conn->query($selectQuery);


		if ($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();

			if ($password == $row["password"] && $row["isAdmin"])
			{
				$_SESSION['admin_logged_in'] = true;
				header('Location: users.php');
			}
			else
			{
				errorMessage();
			}
		} 
		else 
		{
			errorMessage();
		}
		
		$conn->close();

?>