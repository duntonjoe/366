<?php include("top.html"); ?>

<div>
	<form >
		<fieldset>
		Name: <input type="text" name="name" size="16" maxlength="16" align="center" /> <br />
		Gender: <input type="radio" name="gender" value="Male" align="center" /> <label for="Male">Male</label> <input type="radio" name="gender" value="Female" align="center" /> <label for="Female">Female</label> <br />
		Age: <input type="text" name="age" size="6" maxlength="2" align="center"/> <br />
		Personality Type: <input type="test" name="ptype" size="6" maxlength="4" align="center" /> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp"> Don't know your type?</a>) <br />
		Favorite OS: <select required>
						<option value="windows">Windows</option>
						<option value="macOS">MacOS</option>
						<option value="linux">Linux</option>
					</select> <br />
		Seeking Age: <input type="text" name="minAge" size="6" maxlength="2" align="center" value="min" /> to <input type="text" name="maxAge" size="6" maxlength="2" align="center" value="max" /> <br />
		<input type="submit" name="submit" value="Sign Up" />
		</fieldset>
	</form>
</div>

<?php include("bottom.html"); ?>
