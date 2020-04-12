<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Blood Bank | Registration Form</title>
</head>

<body>
<form method=POST action='includes/reg.inc.php'>
	<input type=text name=first placeholder='First Name'>
	<input type=text name=last placeholder='Last Name'><br>
	<input type=text name=email placeholder='Email'><br>
	<input type=text name=contact placeholder='Mobile/Phone No'><br>

	Blood Group: <select name='bg'>
		<option value='A'>A</option>
		<option value='B'>B</option>
		<option value='O'>O</option>
		<option value='C'>AB</option>
	</select><br>

	Rh Factor: <select name='rh'>
		<option value='+'>+</option>
		<option value='-'>-</option>
	</select><br>

	<button type=submit name=reg value='set'>Register</button>

</form>
 <?php
 ?>
</body>
</html>

