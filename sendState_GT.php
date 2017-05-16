<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'csip');
define('DB_DATABASE', 'its');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);// get the parameters
$fo = $_REQUEST["q"];
$ph = $_REQUEST["r"];
$fs = $_REQUEST["s"];


$id = 1;$sql = "INSERT INTO state (id, fo, ph, fs)
VALUES ($id, $fo, $ph, $fs)";

mysqli_query($db, $sql);mysqli_close($db);

?> 
