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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>
   <body id="page-top">

    <!-- Navigation -->
    <?php include 'navbar.php';
    ?>
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>AUTOMANIA</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"></p>

                                                 <?php  if(isset($_SESSION['email'])) { $uid=$_SESSION['id'];
                                              $sel="Select submit1,submit2,submit3,submit4,score,submit,qual from users where id='$uid'";
                                              $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                                              $arr=mysqli_fetch_array($selres); ?>
             <?php  if($arr['submit']=='0' && $i<16 ){ ?>


                <a class="btn btn-primary btn-xl js-scroll-trigger" href="autoquiz/autoquiz.php?id=<?php echo $i; ?>">Play now!</a>
               <?php }

            else if($arr['submit']=='1' && $arr['qual']=='0'){ ?>


                <a class="btn btn-primary btn-xl js-scroll-trigger" href="autoquiz/autoquiz_submit.php">Play now!</a>

            <?php } else if($arr[0]=='0') { ?>

                <a class="btn btn-primary btn-xl js-scroll-trigger" href="round1/shop.php">Play now!</a>

            <?php }
                                               else if($arr[0]=='1' &&$arr[1]=='0') { ?>


                <a class="btn btn-primary btn-xl js-scroll-trigger" href="round2/shop2.php">Play now!</a>

             <?php }
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='0') { ?>

                <a class="btn btn-primary btn-xl js-scroll-trigger" href="round3/shop3.php">Play now!</a>

             <?php }
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='0') { ?>

                 <a class="btn btn-primary btn-xl js-scroll-trigger" href="round4/shop4.php">Play now!</a>

                                              <?php }
             else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='1') { ?>

                 <a class="btn btn-primary btn-xl js-scroll-trigger" href="round4/success4.php">Play now!</a>

            <?php }   }

            ?>
              </div>
        </div>
      </div>
    </header>


     <!-- Bootstrap core JavaScript -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor1/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor1/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor1/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
