<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Code Coliseum</title>
	

</head>
<body style="background-color:gainsboro;">
	<h1>Login successful!</h1>
	<center><br>
	<b><div style="font-size: 20px">
	<h2>Hello <?= "{$_SESSION['username']}" ?></b></h2></center>
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>