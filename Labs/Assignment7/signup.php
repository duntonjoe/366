<?php include("top.html"); ?>


	<form action="signup-submit.php" method="POST">
		<fieldset>
		<legend>New User Signup:</legend>
		<ul>
			<li><div class="column">Name:</div> <input type="text" name="name" size="16" maxlength="16"/> </li>
			<li>
				<div class="column">Gender:</div> 
				<label><input type="radio" name="gender" value="M" />Male</label>
				<label><input type="radio" name="gender" value="F" checked />Female</label>
			</li>
			<li>
				<div class="column">Age:</div>
				<input type="text" name="age" size="6" maxlength="2"/>
			</li>
			<li>
				<div class="column">Personality Type:</div>
				<input type="test" name="ptype" size="6" maxlength="4"/> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
			</li>
			<li>
				<div class="column">Favorite OS:</div>
				<select name="os">
						<option>Windows</option>
						<option>Mac OS X</option>
						<option>Linux</option>
				</select>
			</li>
			<li>
				<div class="column">Seeking Age: </div>
				<input type="text" name="minAge" size="6" maxlength="2" placeholder="min"/> to <input type="text" name="maxAge" size="6" maxlength="2" placeholder="max" /> 
			</li>
		</ul>
		<input type="submit" name="submit" value="Sign Up" />
		</fieldset>
	</form>

<?php include("bottom.html"); ?>
