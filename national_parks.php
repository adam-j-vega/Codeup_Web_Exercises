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

require "../php_pdo.php";

//============================================================================



$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$count = (int) ($dbc->query('SELECT count(*) FROM national_parks')->fetchColumn());

//This function generates a variable that picks up the values for the array in the selected database.
function get_national_parks($dbc,$offset) 
	{
    // Bring the $dbc variable into scope somehow

		$dbc->prepare($offset);
		
		return ($dbc->query("SELECT * FROM national_parks ORDER BY name LIMIT 4 OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC));
	}

//============================================================================



if(!empty($_POST)){
	$national_parks = get_national_parks($dbc,$offset);

	//variables below catch $_POST elements

	$name = $_POST["name"];
	$location = $_POST["location"];
	$date_established = $_POST["date_established"];
	$area_in_acres = $_POST["area_in_acres"];
	$park_description = $_POST["park_description"];


	$stmt = $dbc->prepare('INSERT INTO national_parks (name,location,date_established,area_in_acres,park_description) VALUES (:name,:location,:date_established,:area_in_acres,:park_description)');

	foreach ($national_parks as $national_park) 
	{
	    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
	    $stmt->bindValue(':location',  $location,  PDO::PARAM_STR);
	    $stmt->bindValue(':date_established',  $date_established,  PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',  $area_in_acres,  PDO::PARAM_STR);
	    $stmt->bindValue(':park_description',  $park_description,  PDO::PARAM_STR);

	}

	$stmt->execute();


}
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

						<button type='button' class='btn btn-default'><a href='$_GET offset=<?=($offset-4);?>'>PREV</a></button>

						<?endif;?>
						<?if(($offset+4)<$count):?>
						<button type="button" class="btn btn-default"><a href='?offset=<?=$offset+4;?>'>NEXT</a></button>
						<?endif;?>
					</div>
			</div>
			<h1>Add a National Park</h1>
			<form action="national_parks.php" method="POST">
			Name: <input type="text" required value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>"><br>
			Location: <input type="text" required name="location"><br>
			Date Established: <input type="date" required name="date_established"><br>
			Area in Acres: <input type="number" required name="area_in_acres"><br>
			Park Description: <input type="text" required name="park_description"><br>
			<input type="submit">
			</form>
	</div>
</body>
</html>

