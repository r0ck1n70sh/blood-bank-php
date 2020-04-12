<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Blood Bank | Find a donar</title>
</head>

<body>
<form method=GET action='includes/find.inc.php'>
	Blood Group: <select name='bg'>
		<option value='A'>A</option>
		<option value='B'>B</option>
		<option value='O'>O</option>
		<option value='C'>AB</option>
	</select>

	Rh Factor: <select name='rh'>
		<option value='+'>+</option>
		<option value='-'>-</option>
	</select>

	<button type=submit name=bttn value='set'>Find</button>
</form>
 <?php
	//include_once('includes/find.inc.php');

	//if(isset($_GET['bttn'])){
	//	while($row= mysqli_fetch_assoc($result)){
	//		printf("%s %s | %s | %s <br>", $row['first'], $row['last'], $row['email'], $row['contact']);
	//	}
	//}
 ?>
</body>
</html>

