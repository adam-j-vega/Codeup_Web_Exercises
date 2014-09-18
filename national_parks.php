<?php

// Create a page that lists the national parks from your database. 
// On each page load, it should retrieve all records from the 
// database and display them.

// Modify your page to only load four parks at a time and add links
// to go the next or previous pages.

// Modify your query to load the appropriate parks given which page
// the user is on. You should accept one or two parameters from 
// $_GET and use them to load the appropriate parks.

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'adam_vega', 'NewAtlas88');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//============================================================================


$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$count = (int) $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

function get_national_parks($dbc,$offset) 
	{
    // Bring the $dbc variable into scope somehow
		return $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC);
	}

//============================================================================

//THIS IS SOMETHING YOU SHOULDN'T USE ******
// isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$page = get_national_parks($dbc,$offset);


?>

<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		 <table class ="table">
		 	<?php foreach($page as $key => $value): ?>
			  <tr>
			    <td><?php echo $value['name']?></td>
			    <td><?php echo $value['location']?></td>
			    <td><?php echo $value['date_established']?></td>
			    <td><?php echo $value['area_in_acres']?></td>
			  </tr>
			 <?php endforeach ?>
			</table> 
			<br>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php if($offset != 0):?>
						<button type='button' class='btn btn-default'><a href='?offset=<?=($offset-4);?>'>PREV</a></button>
						<?endif;?>
						<?if(($offset+4)<$count):?>
						<button type="button" class="btn btn-default"><a href='?offset=<?=$offset+4;?>'>NEXT</a></button>
						<?endif;?>
					</div>
			</div>
			</form>
	</div>
</body>
</html>


