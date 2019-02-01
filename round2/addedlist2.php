<?php
require 'includes/common.php';
$uid=$_SESSION['id'];
$sel="Select submit2,qual,qual1,qual2,qual3 from users where id='$uid'";
$sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr=mysqli_fetch_array($sel_res);
if($arr[0]==1)
    header('Location:../index.php');
else if($arr[1]==0 || $arr[2]==0)
{header('Location:../index.php'); }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AUTOMANIA</title>




      <link rel="stylesheet" href="css2/style.css">
       <script src="auto-submit2.js"></script>
     <style>
.button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>


</head>
<body>
    <div class="container">
	 <div>
             <button class="button button3" onclick="window.history.back();">Find items</button>
             <h2 style="color:#3498DB   ; float: right; font-family: Verdana, Arial, Helvetica, sans-serif"><b>Time left: <span id="time" class="text-danger"></span></b></h2></div>
             <h3> Rating for the round will be 0 if the car is left incomplete.</h3>

    <table>
        <thead>
        <tr>
								<th>Item Number</th>
								<th >Item Name</th>
								<th>Type</th>
								<th>Cost</th>
                                                                <th></th>
        </tr>
                                            </thead>
                                            <tbody>


                                                             <?php
 $user_id=$_SESSION['id'];
    $select_query="Select * from items_users where userid='$user_id'";
    $select_query_1="Select * from items i inner join items_users iu on i.id=iu.itemid where userid='$user_id'";
    $select_query_2="Select *from users u inner join items_users iu on u.id=iu.userid";
    $select_query_res=mysqli_query($con,$select_query_1) or die(mysqli_error($con));
    $no_of_rows= mysqli_num_rows($select_query_res);
    if($no_of_rows==0)
    {
        ?>
        <br />
        <br />
        <?php
        echo "<h3>Add items to list first</h3>";
    }
    else{
        $sum=0;
        $c=0;

        while($row= mysqli_fetch_array($select_query_res))
    {
        $sum=$sum+$row[3];

        $c+=1;
        ?>
								<tr>
									<td><?php echo $c; ?></td>
                                                                    <td><?php echo $row[1]; ?></td>
									<td><?php echo $row[2];   ?></td>
                                                                        <td><?php echo $row[3]; ?></td>
									<td><a href='removeitem2.php?id=<?php echo $row[0]?>' class='remove_item_link'> Remove</a><?php } ?></td>
								</tr>
                                                                <tr>
									<td></td>
									<td></td>
									<td>Total</td>
									<td><?php echo $sum; } ?></td>

                                                                            <?php

                $uid=$_SESSION['id'];
                $sel="Select COUNT(DISTINCT type) from items_users where userid='$uid'";
                $selres=mysqli_query($con,$sel) or diemysqli_error($con);
                $arr=mysqli_fetch_array($selres);

                if($arr[0]==11){
               ?>
									  <?php } ?>
                                                                </tr>

					</tbody>
    <table/>

    </div>


</body>
</html>
