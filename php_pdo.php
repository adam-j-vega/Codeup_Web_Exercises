<?php
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db','adam_vega','NewAtlas88');

// This is the line that gives me errors
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


?>