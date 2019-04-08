<?php include("top.html"); ?>


	<form action="signup-submit.php" method="post">
		<fieldset>
		<legend>New User Signup:</legend>
		<ul>
			<li><div class="forms">Name:</div> <input type="text" name="name" size="16" maxlength="16"/> </li> <br />
			<li><div class="forms">Gender:</div> <input type="radio" name="gender" value="Male" /> <label for="Male">Male</label> <input type="radio" name="gender" value="Female"/> <label for="Female">Female</label> </li>
			<li></li><div class="forms">Age:</div> <input type="text" name="age" size="6" maxlength="2"/> </li> <br/>
			<li><div class="forms">Personality Type:</div> <input type="test" name="ptype" size="6" maxlength="4"/> (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>) </li>
			<li><div class="forms">Favorite OS:</div> <select name="os" required class = "forms">
							<option value="windows">Windows</option>
							<option value="macOS">MacOS</option>
							<option value="linux">Linux</option>
						</select> </li>
			<li><div class="forms">Seeking Age: </div> <input type="text" name="minAge" size="6" maxlength="2" placeholder="min"/> to <input type="text" name="maxAge" size="6" maxlength="2" placeholder="max" /> </li>
		</ul>
		<input type="submit" name="submit" value="Sign Up" />
		</fieldset>
	</form>

<?php include("bottom.html"); ?>
