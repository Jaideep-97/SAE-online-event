<?php

require 'includes/common.php';
//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$item_id=$_GET['id'];
$user_id= $_SESSION['id'];
$sel_query="Select type from items where id='$item_id'";
$sel_query_res=mysqli_query($con,$sel_query);
$row=mysqli_fetch_array($sel_query_res);
$type=$row[0];
$ins_query="Insert into items_users(userid,itemid,type)values('$user_id','$item_id','$type')";
$query_res=mysqli_query($con,$ins_query) or die(mysqli_error($con));
$sel_query1="Select cost from items i where id='$item_id'";
$sel_query_res=mysqli_query($con,$sel_query1);
$row1=mysqli_fetch_array($sel_query_res);
$sel_query="Select balance from users where id='$user_id'";
$sel_query_res=mysqli_query($con,$sel_query);
$row2=mysqli_fetch_array($sel_query_res);
$bal=$row2[0]-$row1[0];
//$bal=$row1[0];
$update_query="Update users set balance='$bal' where id='$user_id'";
$update_query_res=mysqli_query($con,$update_query);
//echo ${_SERVER['HTTP_REFERER']};
header("Location: ${_SERVER['HTTPS_REFERER']}");
?>
