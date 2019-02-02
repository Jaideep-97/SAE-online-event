<?php
require 'includes/common.php';
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);

$password = mysqli_real_escape_string($con, $_POST['password']);
$p=$password;
$stmt1 = $con->prepare('SELECT id FROM users WHERE email = ?');
$stmt1->bind_param('s', $email); // 's' specifies the variable type => 'string'
$password=md5($password);
$stmt1->execute();
$stmt1->store_result();
$result = $stmt1->bind_result($id);


$row = $stmt1->num_rows;

if($row>0)
{
    echo "<h2>Email id already exists. Try a different one</h2>";
}
else
{
    if($stmt=$con->prepare("Insert into users(email,name,password,contact) values (?,?,?,?)")){
    $stmt->bind_param("ssss", $email,$name,$password,$contact); // 's' specifies the variable type => 'string'

$stmt->execute();

$stmt->close();




    header('Location:login.php');
}
}
}





?>
