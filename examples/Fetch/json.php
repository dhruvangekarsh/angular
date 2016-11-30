<?php

$con = new mysqli('localhost','root','','angular');

$result = mysqli_query($con,"SELECT * FROM profile");  
$json_response = array();  

echo '{ "profile":';
while ($row = mysqli_fetch_array($result)) {  
	$row_array['firstname'] = $row['firstname'];
	$row_array['lastname'] = $row['lastname'];
	$row_array['email'] = $row['email'];
	$row_array['message'] = $row['message'];  
	array_push($json_response,$row_array);  
}  
echo json_encode($json_response);  
echo '} ';
?>  
