<?php 
	$nameError = $emailError = "";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab 3</title>
	<style>
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Vul uw volledige naam in:<br>
		<input type="text" name="fullName">
		<span class="error">*</span>
		<br>
		Vul uw e-mail in:<br>
		<input type="email" name="email">
		<span class="error">*</span>
		<br>
		<br>
		<input type="submit">
	</form>

	<h1>De ingevulde gegevens zijn: </h1>
	<p>Naam: <?php echo $_POST["fullName"]; ?></p>
	<p>Emailadres: <?php echo $_POST["email"]; ?></p>
</body>
</html>