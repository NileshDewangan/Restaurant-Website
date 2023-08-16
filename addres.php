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
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$town = $_POST['town'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
	
	$sql_query="INSERT INTO addres(name,phone,address1,address2,town,pin,state)
	VALUES('$name','$phone','$address1','$address2','$town','$pin','$state')";
	
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

header("Location: Payment Web Page.html");
exit();
?>