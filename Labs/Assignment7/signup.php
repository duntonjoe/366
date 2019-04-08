<?php include("top.html"); ?>

<div>
	<form action="signup-submit.php" method="post">
		<fieldset>
		<legend>New User Signup:</legend>
		Name: <input type="text" name="name" size="16" maxlength="16" class = "forms"/> <br />
		Gender: <input type="radio" name="gender" value="Male" /> <label for="Male">Male</label> <input type="radio" name="gender" value="Female" class = "forms"/> <label for="Female">Female</label> <br />
		Age: <input type="text" name="age" size="6" maxlength="2" class = "forms"/> <br />
		Personality Type: <input type="test" name="ptype" size="6" maxlength="4" class = "forms"/> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>) <br />
		Favorite OS: <select name="os" required class = "forms">
						<option value="windows">Windows</option>
						<option value="macOS">MacOS</option>
						<option value="linux">Linux</option>
					</select> <br />
		Seeking Age: <input type="text" name="minAge" size="6" maxlength="2" placeholder="min" class = "forms"/> to <input type="text" name="maxAge" size="6" maxlength="2" placeholder="max" /> <br />
		<input type="submit" name="submit" value="Sign Up" />
		</fieldset>
	</form>
</div>

<?php include("bottom.html"); ?>
