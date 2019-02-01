<?php
function count_type($type)
{
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  $con = new mysqli($server, $username, $password, $db);
  
  $userid=$_SESSION['id'];
$sel_query="Select * from items_users where type='$type' and userid='$userid'";
$sel_query_res=mysqli_query($con,$sel_query);
$c= mysqli_num_rows($sel_query_res);
return $c;
}


?>
