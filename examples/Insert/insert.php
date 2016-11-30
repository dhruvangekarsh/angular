<?php

	$con = new mysqli('localhost','root','','angular');
	
	file_get_contents('php://input');
	$data = json_decode(file_get_contents('php://input'), true);

	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$email = $data['email'];
	$message = $data['message'];
	
	
	$query = $con->query("INSERT INTO profile(firstname,lastname,email,message)VALUES('$firstname','$lastname','$email','$message')");
	
	
	
