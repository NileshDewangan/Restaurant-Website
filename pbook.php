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
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$city = $_POST['city'];
	
	$sql_query="INSERT INTO pbook(name,phone,date,city)
	VALUES('$name','$phone','$date','$city')";
	
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

header("Location: booksucc.html");
exit();
?>