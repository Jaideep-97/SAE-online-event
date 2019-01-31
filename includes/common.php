<?php
$url = parse_url(getenv("mysql://b3b379651f5f1c:f0464a4a@us-cdbr-iron-east-03.cleardb.net/heroku_f593c8177df17a1?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
session_start();
?>
