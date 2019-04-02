<?php include("top.html"); ?>

<div>
	<form>
		Name: <input type="text" name="name" size="16" /> <br />
				<label for="Male">Male</label>
				<label for="Female">Female</label>
		Gender: <input type="radio" name="gender" value="Male" /> <input type="radio" name="gender" value="Female" /> <br />
		Age: <input type="text" name="age" /> <br />
		Personality Type: <input type="test" name="ptype" size="6" /> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp"> Don't know your type?</a>) <br />
		Favorite OS: <select>
						<option value="windows">Windows</option>
						<option value="macOS">MacOS</option>
						<option value="linux">Linux</option>
					</select>
		Seeking Age: <input type="text" name="minAge" size="6" /> to <input type="text" name="maxAge" size="6" /> <br />
		<input type="submit" name="submit" value="Sign Up" />
	</form>
</div>
