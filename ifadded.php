<?php


function if_added($item_id)
{
    $con=mysqli_connect("localhost","root","","sae_event") or die(mysqli_error($con));
    $user_id= $_SESSION['id'];
    $select_query="Select * from items_users where itemid='$item_id' and userid='$user_id'";
    $select_query_res=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $no_of_rows= mysqli_num_rows($select_query_res);
    if($no_of_rows>0)
    {
        return 1;
    }
 else {
     return 0;
    }
    
}

