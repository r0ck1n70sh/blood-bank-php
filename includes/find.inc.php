<?php
	include_once('db.inc.php');

	$bg= $_GET['bg'];
	$rh= $_GET['rh'];

	$stmt= 'SELECT first, last, email, contact FROM donars WHERE bg="'.$bg.'" AND rh="'.$rh.'" ;';
	
	$res= mysqli_query($conn, $stmt);

	while($row= mysqli_fetch_assoc($res)){
		printf("%s %s | %s | %s <br>", $row['first'], $row['last'], $row['email'], $row['contact']);	
	}

	//header('Location: ../query.php');
?>
