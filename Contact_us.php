<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="restro";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysql_connect_errors());
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$sql_query="INSERT INTO contact(name,email,phone,message)
	VALUES('$name','$email','$phone','$message')";
	
	if (mysqli_query($conn, $sql_query))
	{
		echo "";
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

header("Location: contactus2.html");
exit();
?>

