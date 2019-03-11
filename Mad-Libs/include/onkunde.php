<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form-group">
		<label for="q1">Wat zou je graag willen kunnen?<span>* <?php echo $error[0]; ?></span></label>
		<input type="text" name="q1">
	</div>
	<div class="form-group">
		<label for="q2">Met welke persoon kun je goed opschieten?<span>* <?php echo $error[1]; ?></span></label>
		<input type="text" name="q2">
	</div>
	<div class="form-group">
		<label for="q3">Wat is je favoriete getal?<span>* <?php echo $error[2]; ?></span></label>
		<input type="text" name="q3">
	</div>
	<div class="form-group">
		<label for="q4">Wat heb je altijd bij je als je op vakantie gaat?<span>* <?php echo $error[3]; ?></span></label>
		<input type="text" name="q4">
	</div>
	<div class="form-group">
		<label for="q5">Wat is je beste persoonlijke eigenschap?<span>* <?php echo $error[4]; ?></span></label>
		<input type="text" name="q5">
	</div>
	<div class="form-group">
		<label for="q6">Wat is je slechtste persoonlijke eigenschap?<span>* <?php echo $error[5]; ?></span></label>
		<input type="text" name="q6">
	</div>
	<div class="form-group">
		<label for="q7">Wat is het ergste dat je kan overkomen?<span>* <?php echo $error[6]; ?></span></label>
		<input type="text" name="q7">
	</div>
	<div class="form-group">
		<input type="submit">
	</div>
</form>