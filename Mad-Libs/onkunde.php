<?php 
	$validation = false;
	$error = ["", "", "", "", "", "", ""];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		for ($i=1; $i <= 7; $i++) { 
			if (empty($_POST["q".$i])) {
				$error[$i -1] = "Dit veld dient ingevuld te worden";
			}else {
				$error[$i -1] = "";
			}
		}
	if (checkValues($error, "") == true) {
		$validation = true;
	}else {
		$validation = false;
		}
	}
	function checkValues($myArray, $symbol){
		for ($i = 0; $i < count($myArray); $i++){
			if ($myArray[$i] != $symbol){
				return false;
			}
		}
		return true;
	}
 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<style><?php include "css/style.css";?></style>
	<div class="wrapper">
		<header>
			<h1>Mad Libs</h1>
			<nav>
				<ul>
					<li><a href="index.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
		</header>
		
		<section>
			<div>
				<?php 
					if ($validation == false) {
						include "include/onkunde.php";
					}else if ($validation == true) {
						include "include/onkundeForm.php";
					}
				 ?>
			</div>	
		</section>
	</div>
</body>
</html>