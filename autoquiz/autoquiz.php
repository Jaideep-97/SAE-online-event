<?php
require '../includes/common.php';
$qid=$_GET['id'];
$uid=$_SESSION['id'];
$se="Select submit from users where id='$uid' ";
$ser=mysqli_query($con,$se) or die(mysqli_error($con));
$row=mysqli_fetch_array($ser);
if($row[0]=='1')
    header("Location:../index.php");
$s="Select score from users where id='$uid'";
$se1=mysqli_query($con,$s) or die(mysqli_error($con));
$r=mysqli_fetch_array($se1);
$a=($r[0]/10)+1;
if($qid>=6)
  header("Location:autoquiz_set.php");
if($a!=$qid)
    header("Location:autoquiz.php?id=$a");

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOMANIA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css1/landing-page.min.css" rel="stylesheet">
     <script src="autoquiz-submit.js"></script>
     <script>
         function confirmation()
         {
              if(!confirm("Are you sure you want to submit?"))
        history.go(0);
    else
        window.location="autoquiz_submit.php";


         }
         </script>

  </head>

  <body>
<p>
                                          </p>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">HOME</a>
        <p>Time left to submit:
        <span id="time" class="font-normal"></span>
        </p>
        <a class="btn btn-primary" href="autoquiz_leaderboard.php">Leaderboard</a>
      </div>
    </nav>

        <?php
        include 'if_answered.php';
        ?>

           <?php
           $sel="Select question from quiz where id='$qid'";
           $sel_query=mysqli_query($con,$sel) or die(mysqli_error($con));
           $arr=mysqli_fetch_array($sel_query);
           ?>


<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h3 class="mb-5"><?php echo $qid.".".$arr['question']; $GLOBALS['qid']=$qid; ?></h3>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="POST" action="autoquiz_script.php?id=<?php echo $qid; ?>">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input  class="form-control form-control-lg" name="ans" placeholder="Enter your answer..">
                </div>
                   <?php
                 if(if_answered($qid))
                 {?>
                <div class="col-12 col-md-3">
                  <input  class="btn btn-block btn-lg btn-primary disabled" name="submit" value="Submit!" />
                  <br />
                </div>
                <?php if($qid<5 || $qid<10 || $qid<15) { ?>
                  <button  class="btn btn-block btn-lg btn-primary " onclick="location.href='autoquiz.php?id=<?php echo $qid+1; ?>'">Move to Next Question!</button>
                <?php } ?>

                   <?php }
                 else { ?>
                  <div class="col-12 col-md-3">
                <input type="submit" class="btn btn-block btn-lg btn-primary" name="submit" value="Submit!" />
                    <br />
                  </div>

                  </div>
            </form>

                  <button  class="btn btn-block btn-lg btn-primary " onclick="confirmation();">Final Submit!</button>



                 <?php } ?>

          </div>
        </div>
      </div>
    </header>


    </body>



</html>
