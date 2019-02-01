<?php

require 'includes/common.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <meta charset="UTF-8">
       <link rel="stylesheet" href="css4/style.css">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ROADRANGERS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">



      <link rel="stylesheet" href="css2/style.css">
       <script src="auto-submit4.js"></script>
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
         <?php include 'navbar.php';
         ?>
        <header>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />

        <div class="container">
       <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">ROUND 2 TABLE</h1>
        <table>
            <thead>
            <tr>
                    <th><b>POSITION</b></th>
                    <th><b>NAME</b></th>
                                       <th><b>POINTS</b></th>
                                        <th><b>BALANCE</b></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
        <?php
        $c=0;

       ?>
                 <br />


                <?php
        $sel_query="Select name, points2,bal2 from users where submit2='1' order by points2 desc, bal2 desc";
        $sel_query_res=mysqli_query($con,$sel_query);

        while($row=mysqli_fetch_array($sel_query_res))
        {
            $c+=1;
            if($c==1)
                $a=$_SESSION['id'];
            else if($c==2)
                $b=$row[0];
            ?>
                <tr>
                <td><?php echo $c; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                 <td><?php echo $row[2]; ?></td>
                </tr>
               <?php  } ?>
        </tbody>
        </table>
        <?php

        ?>
        </div>
             </header>
         <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    </body>
</html>
