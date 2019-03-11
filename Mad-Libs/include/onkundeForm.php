<?php  
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
?>

<div style="margin-left: 14px;">
	<p>Er zijn veel mensen die niet kunnen <?php echo test_input($_POST["q1"]); ?>. Neem nou <?php echo test_input($_POST["q2"]); ?>. 		Zelfs met de hulp van een <?php echo test_input($_POST["q4"]); ?> of zelfs <?php echo test_input($_POST["q3"]); ?> kan <?php echo test_input($_POST["q2"]); ?> niet <?php echo test_input($_POST["q1"]); ?>. Dat heeft niet te maken met een gebrek aan <?php echo test_input($_POST["q5"]); ?>, maar met een te veel aan <?php echo test_input($_POST["q6"]); ?>. Te veel <?php echo test_input($_POST["q6"]); ?> leidt tot <?php echo test_input($_POST["q7"]); ?> en dat is niet goed als je wilt <?php echo test_input($_POST["q1"]); ?>. Helaas voor <?php echo test_input($_POST["q2"]); ?></p>
</div>