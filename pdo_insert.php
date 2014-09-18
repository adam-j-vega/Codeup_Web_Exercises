<?php
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'adam_vega', 'NewAtlas88');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(250) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DECIMAL(18,2) NOT NULL,
    PRIMARY KEY (id)
)';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

$national_parks = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-2-26', 'area_in_acres' => 47389.67],
	['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => 76518.98],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-6-12', 'area_in_acres' => 801163.21],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-6-28', 'area_in_acres' => 172924.07],
	['name' => 'Bryce Canyon', 'location' => '', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03],
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1928-2-25', 'area_in_acres' => 35835.08],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-9-12', 'area_in_acres' => 337597.83],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1930-5-14', 'area_in_acres' => 46766.45],
	['name' => 'Channel Islands', 'location' => 'California', 'date_established' => '1980-3-5', 'area_in_acres' => 249561.100],
	['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => '2003-10-10', 'area_in_acres' => 26545.86],
	['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-5-22', 'area_in_acres' => 183224.05],
	['name' => 'Cuyahoga Valley', 'location' => 'Ohio', 'date_established' => '2000-10-11', 'area_in_acres' => 32860.73],
	['name' => 'Death Valley', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => 3372401.96],
	['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-2-26', 'area_in_acres' => 4740911.72],
	['name' => 'Dry Tortugas', 'location' => 'Florida', 'date_established' => '1992-10-26', 'area_in_acres' => 64701.22],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-5-30', 'area_in_acres' => 1508537.90],
	['name' => 'Gates of the Arctic', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 7523897.74],
	['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-5-11', 'area_in_acres' => 1013572.41],
	['name' => 'Glacier Bay', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 1013572.41],
	['name' => 'Grand Canyon', 'location' => 'Arizona', 'date_established' => '1919-2-26', 'area_in_acres' => 1217403.32],
	['name' => 'Grand Teton', 'location' => 'Wyoming', 'date_established' => '1929-2-26', 'area_in_acres' => 309994.66],
	['name' => 'Great Basin', 'location' => 'Nevada', 'date_established' => '1986-10-27', 'area_in_acres' => 77180.00],
	['name' => 'Great Sand Dunes', 'location' => 'Colorado', 'date_established' => '2004-9-13', 'area_in_acres' => 42983.74],
	['name' => 'Great Smoky Mountains', 'location' => 'North Carolina, Tennessee', 'date_established' => '1934-6-15', 'area_in_acres' => 521490.13],
	['name' => 'Guadalupe Mountains', 'location' => 'Texas', 'date_established' => '1966-10-15', 'area_in_acres' => 86415.97],
	['name' => 'Haleakala', 'location' => 'Hawaii', 'date_established' => '1916-8-1', 'area_in_acres' => 29093.67],
	['name' => 'Hawaii Volcanoes', 'location' => 'Hawaii', 'date_established' => '1916-8-1', 'area_in_acres' => 323431.38],
	['name' => 'Hot Springs', 'location' => 'Arkansas', 'date_established' => '1921-3-4', 'area_in_acres' => 5549.75],
	['name' => 'Isle Royale', 'location' => 'Michigan', 'date_established' => '1931-3-3', 'area_in_acres' => 571790.11],
	['name' => 'Joshua Tree', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => 789745.47],
	['name' => 'Katmai', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 3674529.68],
	['name' => 'Kenai Fjords', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 669982.99],
	['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => '1940-3-4', 'area_in_acres' => 461901.20],
	['name' => 'Kobuk Valley', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 1750716.50],
	['name' => 'Lake Clark', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 2619733.21],
	['name' => 'Lassen Volcanic', 'location' => 'California', 'date_established' => '1916-8-9', 'area_in_acres' => 106372.36],
	['name' => 'Mammoth Cave', 'location' => 'Kentucky', 'date_established' => '1941-7-1', 'area_in_acres' => 52830.19],
	['name' => 'Mesa Verde', 'location' => 'Colorado', 'date_established' => '1906-6-29', 'area_in_acres' => 52121.93],
	['name' => 'Mount Rainier', 'location' => 'Washington', 'date_established' => '1899-3-2', 'area_in_acres' => 235625.00],
	['name' => 'North Cascades', 'location' => 'Washington', 'date_established' => '1968-10-2', 'area_in_acres' => 504780.94],
	['name' => 'Olympic', 'location' => 'Washington', 'date_established' => '1938-6-29', 'area_in_acres' => 922650.86],
	['name' => 'Petrified Forest', 'location' => 'Arizona', 'date_established' => '1962-12-9', 'area_in_acres' => 93532.57],			
	['name' => 'Pinnacles', 'location' => 'California', 'date_established' => '2013-1-10', 'area_in_acres' => 26605.73],
	['name' => 'Redwood', 'location' => 'California', 'date_established' => '1968-10-2', 'area_in_acres' => 112512.05],
	['name' => 'Rocky Mountain', 'location' => 'Colorado', 'date_established' => '1915-1-26', 'area_in_acres' => 265828.41],
	['name' => 'Saguaro', 'location' => 'Arizona', 'date_established' => '1994-10-14', 'area_in_acres' => 91439.71],
	['name' => 'Sequioa', 'location' => 'California', 'date_established' => '1890-9-25', 'area_in_acres' => 404051.17],
	['name' => 'Shenandoah', 'location' => 'Virginia', 'date_established' => '1926', 'area_in_acres' => 199045.23],
	['name' => 'Theodore Roosevelt', 'location' => 'North Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 70446.89],
	['name' => 'Virgin Islands', 'location' => 'United States Virgin Islands', 'date_established' => '1956-8-2', 'area_in_acres' => 14688.87],
	['name' => 'Voyageurs', 'location' => 'Minnesota', 'date_established' => '1971-1-8', 'area_in_acres' => 218200.17],
	['name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => '1903-1-9', 'area_in_acres' => 114.5],
	['name' => 'Wrangell - St. Elias', 'location' => 'Alaska', 'date_established' => '1980-12-2', 'area_in_acres' => 8323147.59],
	['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-3-1', 'area_in_acres' => 2219790.71],
	['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-1', 'area_in_acres' => 761266.19],
	['name' => 'Zion', 'location' => 'Utah', 'date_established' => '1919-11-19', 'area_in_acres' => 145597.60]
];

foreach ($national_parks as $national_park)
{
	$query = "INSERT INTO national_parks (name,location, date_established, area_in_acres) VALUES ('{$national_park['name']}', '{$national_park['location']}', '{$national_park['date_established']}', '{$national_park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


?>