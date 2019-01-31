<?php
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server =us-cdbr-iron-east-03.cleardb.net;
$username = b3b379651f5f1c;
$password = f0464a4a;
$db = heroku_f593c8177df17a1;

$conn = new mysqli($server, $username, $password, $db);
session_start();
?>
