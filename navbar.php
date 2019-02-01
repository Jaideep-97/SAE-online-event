<?php
require 'includes/common.php';
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ROADRANGERS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor1/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <img src="saelogo.png" height="5%" width="15%" />
          <br />
          <h2 class="navbar-brand js-scroll-trigger" style="text-align:center; font-size:0.9em;">SOCIETY OF </br/>AUTOMOTIVE ENGINEERS<br/>SAE</h2>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>

               <?php
                                            if(isset($_SESSION['email'])) {?>

                                                 <?php $uid=$_SESSION['id'];
                                              $sel="Select submit1,submit2,submit3,submit4,score,submit,qual from users where id='$uid'";
                                              $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                                              $arr=mysqli_fetch_array($selres);
                                              $s=$arr['score'];
                                              $i=($s/10)+1;
                                              ?>

                                          <li class="nav-item">
                                              <a class="nav-link js-scroll-trigger" href="rules.php">Rules</a>
                                              </li>
            <?php if($arr['submit']=='0') {  ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz_leaderboard.php">Leaderboard</a>
            </li>  <?php }
             else if($arr['submit']=='1' && $arr['qual']=='0') {  ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz_leaderboard.php">Leaderboard</a>
            </li>  <?php }
            else if($arr['submit']==1) { ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="tables/leaderboard.php">leaderboard</a>
            </li><?php } ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="settings.php">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>

             <?php }                                   else { ?>

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
              <?php  } ?>
            </ul>


        </div>
      </div>
    </nav>

  </body>
</html>
