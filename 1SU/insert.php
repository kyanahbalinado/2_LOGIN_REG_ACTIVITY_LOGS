<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Balinado</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Edit!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="firstName">Address</label> 
			<input type="text" name="address">
		</p>
		<p>
			<label for="firstName">Age</label> 
			<input type="text" name="age">
		</p>
		<p>
			<label for="firstName">Number</label> 
			<input type="text" name="number">
		</p>
		<p>
			<label for="firstName">Blood Type</label> 
			<input type="text" name="blood_type">
			<input type="submit" name="insertUserBtn">
		</p>
	</form>
</body>
</html>

