<?php
	include_once('db.inc.php');
	
	$first= $_POST['first'];
	$last= $_POST['last'];
	$email= $_POST['email'];
	$contact= $_POST['contact'];
	$bg= $_POST['bg'];
	$rh= $_POST['rh'];
	
	$query= 'INSERT INTO donars(first,last,email,contact,bg,rh) VALUES("'.$first.'","'.$last.'","'.$email.'","'.$contact.'","'.$bg.'","'.$rh.'");';

	mysqli_query($conn, $query);

	header('Location: ../regform.php?reg=success');
?>
