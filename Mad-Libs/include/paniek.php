<?php  
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
?>

<div style="margin-left: 14px;">
	<p>Er heerst paniek in het koninkrijk <?php echo test_input($_POST["q3"]); ?>. Koning <?php echo test_input($_POST["q6"]); ?> is ten einde raad en als koning <?php echo test_input($_POST["q6"]); ?> ten einde raad is. dan roept hij zijn ten-einde-raadsheer <?php echo test_input($_POST["q2"]); ?></p>

	<p>"<?php echo test_input($_POST["q2"]); ?>! het is een ramp! het is een schande!"</p>

	<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

	<p>"Mijn <?php echo test_input($_POST["q1"]); ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo test_input($_POST["q5"]); ?> voor hem gekocht!"</p>

	<p>"Majesteit, uw <?php echo test_input($_POST["q1"]); ?> komt vast vanzelf weer terug?"</p>

	<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo test_input($_POST["q8"]); ?> leren?"</p>

	<p>"Maar Sire, daar kunt u toch uw <?php echo test_input($_POST["q7"]); ?> voor gebruiken."</p>

	<p>"<?php echo test_input($_POST["q2"]); ?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."</p>

	<p>"<?php echo test_input($_POST["q4"]); ?>, Sire"</p>
</div>