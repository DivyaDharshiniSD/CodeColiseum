<?php
	session_start();
	require('connectdb.php');

	// if ( isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']))
 if ( isset($_POST['username']) and isset($_POST['password']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$query = "SELECT * FROM `login` WHERE username = '$user' and password = '$pass' ";
		// $query =  "SELECT username='$user'and email='$email'and password='$password' FROM `login`";
		// $query = "SELECT * FROM `login` WHERE username,email = '$user' OR '$email' and password = '$pass' ";
		// $query = "SELECT * FROM `login` WHERE '$username' IN (username,email) AND 'password'='$pass'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);

		if ($count == 1)
		{
			$_SESSION['username'] = $user;
			header('location:print.php');
			$sql = "insert into count (username) values ('$user') ";
			mysqli_query($conn, $sql);
		}
		else
		{
			header('location:index.php');
		}
	}
?>