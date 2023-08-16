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

if(isset($_POST['saved']))
{
	$phone = $_POST['phone'];
	
	$sql_query="INSERT INTO Callback(phone)
	VALUES('$phone')";
	
	if (mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry Inserted Successfuly !";
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
header("Location: CONTACTUS3.html");
exit();
?>