<?php

	$con = new mysqli('localhost','root','','angular');
	
	if(isset($_GET['table'])){$table=$_GET['table'];}
	
	if($table){
		$query = mysqli_query($con,'SELECT * FROM '.$table);
		
		$posts = array();
		if(mysqli_num_rows($query)) {
			while($post = mysqli_fetch_assoc($query)) {
				$posts[] = $post;
			}
		}		
		header('Content-type: application/json');
		echo json_encode(array($table=>$posts));
			
	}else{
		echo 'Please tell me the table Name';
	}
?>
