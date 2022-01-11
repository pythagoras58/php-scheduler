<?php
	include('../inc/connect.php');
	include('../inc/insert.php');
	if (isset($_POST['Submit'])) {
	$phone=$_POST['phone'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$table_name='users';
	
	
	$form_data = array(
	    'name' =>  $fname. ' ' .$lname ,
		'phone' => $phone,
		'username' => $fname,
		'password' => $password,
		'access' => 1
	);
		
	
	//echo dbRowInsert($table_name, $form_data);
$conn->multi_query( dbRowInsert($table_name, $form_data));
$conn->close();
	
	}
	
?>