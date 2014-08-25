<?php

var_dump($_POST);
var_dump($_GET);

?>
<html>
<head>
	
	<title>My First HTML Form</title>
</head>
<body>

	<h2> User Login </h2>

	<form method="GET">
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


	<form method="GET">
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
		<form method="GET">
		<p>Where was Adam born?</p>
		<label>
			<input type="radio" id="q1a" name="q1" value="New Orleans" />
			New Orleans
		</label>
				<label>
			<input type="radio" id="q1b" name="q1" value="San Antonio" />
			San Antonio
		</label>
				<label>
			<input type="radio" id="q1c" name="q1" value="Philadelphia" />
			Philadelphia
		</label>
				<label>
			<input type="radio" id="q1d" name="q1" value="San Francisco" />
			San Francisco
		</label>
				<label>
			<input type="radio" id="q1e" name="q1" value="Corpus Christi" />
			Corpus Christi
		</label>
		<p>What country does Adam's surname come from?</p>
		<label>
			<input type="radio" id="q2a" name="q2" value="England" />
			England
		</label>		
		<label>
			<input type="radio" id="q2b" name="q2" value="Germany" />
			Germany
		</label>
		<label>
			<input type="radio" id="q2c" name="q2" value="Ireland" />
			Ireland
		</label>	
		<label>
			<input type="radio" id="q2d" name="q2" value="Spain" />
			Spain
		</label>
		<label>
			<input type="radio" id="q2e" name="q2" value="Austria" />
			Austria
		</label>		

</body>
<html>


