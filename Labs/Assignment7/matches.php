<?php include("top.html"); ?>

<div>
	<form action="matches-submit.php" method="GET">
		<fieldset>
			<legend>Returning User:</legend>
			<ul>
				<li> <div class="column">Name:</div> <input type="text" name="name" size="16" maxlength="16" /> </li>
			</ul>
			<input type="submit" name="submit" value="View My Matches" />
		</fieldset>
	</form>
</div>

<?php include("bottom.html"); ?>
