<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form-group">
		<label for="q1">Welk dier zou je nooit als huisdier willen hebben?<span>* <?php echo $error[0]; ?></span></label>
		<input type="text" name="q1">
	</div>
	<div class="form-group">
		<label for="q2">Wie is de belangrijkste persoon in je leven?<span>* <?php echo $error[1]; ?></span></label>
		<input type="text" name="q2">
	</div>
	<div class="form-group">
		<label for="q3">In welk land zou je graag willen wonen?<span>* <?php echo $error[2]; ?></span></label>
		<input type="text" name="q3">
	</div>
	<div class="form-group">
		<label for="q4">Wat doe je als je je verveelt?<span>* <?php echo $error[3]; ?></span></label>
		<input type="text" name="q4">
	</div>
	<div class="form-group">
		<label for="q5">Met welk speelgoed speelde je als kind het meest?<span>* <?php echo $error[4]; ?></span></label>
		<input type="text" name="q5">
	</div>
	<div class="form-group">
		<label for="q6">Bij welke docent spijbel je het liefst?<span>* <?php echo $error[5]; ?></span></label>
		<input type="text" name="q6">
	</div>
	<div class="form-group">
		<label for="q7">Als je €100.000,- had. Wat zou je dan kopen?<span>* <?php echo $error[6]; ?></span></label>
		<input type="text" name="q7">
	</div>
	<div class="form-group">
		<label for="q8">Wat is je favoriete bezigheid?<span>* <?php echo $error[7]; ?></span></label>
		<input type="text" name="q8">
	</div>
	<div class="form-group">
		<input type="submit">
	</div>
</form>