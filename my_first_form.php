<?php

var_dump((int)$_POST);
var_dump($_GET);

?>
<html>
<head>
	
	<title>My First HTML Form</title>
</head>
<body>

	<h2> User Login </h2>

	<form method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" id="username"/>
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter Password" />
		</p>
		<p>
			<input type="submit">
	</form>
	<h2> Compose and Email </h2>


	<form method="POST">
		<p>
			<input type="checkbox" id="copy" name="copy" value="yes" checked>
			<label for="copy">Would you like to have a copy sent to your folder?</label>
		</p>
		<p>
			<label for="to">To</label>
			<input type="text" name="to" id="to"/>
		</p>
		<p>
			<label for="from">From</label>
			<input type="text" name="from" id="from"/>
		</p>
		<p>
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject"/>
		</p>
		<p>
			<textarea id="email_body" name="email_body">Content Here</textarea>

		</p>
			<input type="submit" value="Send" />
	</form>
	<h2>Multiple Choice Test</h2>
		<form method="POST">
			<p>Where was Adam born?</p>
			<label>
				<input type="radio" name="q1" value="New Orleans" />
				New Orleans
				<input type="radio" name="q1" value="San Antonio" />
				San Antonio
				<input type="radio" name="q1" value="Philadelphia" />
				Philadelphia
				<input type="radio" name="q1" value="San Francisco" />
				San Francisco
				<input type="radio" name="q1" value="Corpus Christi" />
				Corpus Christi
			</label>
			<p>What country does Adam's surname come from?</p>
			<select name="surname_question" id="surname_question"/>
				<option>Ireland</option>
				<option selected>Spain</option>
				<option>Germany</option>
				<option>England</option>
				<option>Austria</option>
			</select>
			<br>
			<p>What countries does Adam's ancestors come from?</p>
					<label><input type="checkbox" name="countries_question[]" value="Germany"> Germany</label>
					<label><input type="checkbox" name="countries_question[]" value="Spain"> Spain</label>
					<label><input type="checkbox" name="countries_question[]" value="Ireland"> Ireland</label>
					<label><input type="checkbox" name="countries_question[]" value="England"> England</label>
					<label><input type="checkbox" name="countries_question[]" value="Mexico"> Mexico</label>
			<br>
				<input type="submit" value="Send" />
			<br>
		</form>	
	<h>Select Testing</h>
	<br>
		<form method="POST">
			<label for="yes_or_no">Yes or No?</label>
			<select name="yes_or_no" id="yes_or_no"/>
				<option>Yes</option>
				<option selected>No</option>
			</select>
			<br>
				<input type="submit" value="Send" />
			<br>
		</form>
		
</body>
<html>


