<?php
require 'includes/common.php';
$_SESSION["post_id"] = "";



$uid=$_SESSION['id'];
$se="Select submit from users where id='$uid' ";
$ser=mysqli_query($con,$se) or die(mysqli_error($con));
$row=mysqli_fetch_array($ser);
if($row[0]=='1')
    header("Location:../index.php");

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>AUTOMANIA</title>
<script>
   /*   (function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");
    },0);
  }
}, false);
}(window, location)); */
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location."../index.php" );
    }
</script>
</script>

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
              if(!confirm("Are you sure you want to submit? You cannot attempt anymore questions if submitted."))
        window.location="../index.php";
    else
        window.location="autoquiz_submit.php";


         }
         </script>


  </head>

  <body>

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
if(isset($_POST['submit']))
{
$qid=mysqli_real_escape_string($con,$_GET['id']);
$ans=mysqli_real_escape_string($con,$_POST['ans']);





$userid=$_SESSION['id'];
  $stmt=$con->prepare("Insert into quiz_users(qid,uid)values(?,?)");
    $stmt->bind_param("ss",$qid,$userid);
    $stmt->execute();

$sel="Select answer from quiz where id='$qid' ";
$selquery=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr= mysqli_fetch_array($selquery);
$userid=$_SESSION['id'];


if($ans==$arr['answer'])
{

$email=$_SESSION['email'];
$sel="Select * from users where email='$email'";
$selres=mysqli_query($con,$sel) or die(mysqli_error($con));
$row= mysqli_fetch_array($selres);
//$score=$row['score']+10;
$score=$qid*10;
date_default_timezone_set('Asia/Kolkata');
$time = date('Y-m-d H:i:s');
$upd="Update users set submitdate='$time' where id='$userid'";
$updq=mysqli_query($con,$upd) or die(mysqli_error($con));
$up="Update users set score='$score'where email='$email'";
$GLOBALS['q1']=1;
$upres=mysqli_query($con,$up) or die(mysqli_error($con));
$_COOKIE['a']=1;

?>
     <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Correct Answer!</h1>
          </div>
          <div class=" col-md-4 col-lg-4 col-xl-4 mx-auto">
            <?php  if($qid<15 || ($qid>=16 && $qid<30) || ($qid>=31 && $qid<45)  ) { ?>
                <div >
                  <button  class="btn btn-block btn-md btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid+1; ?>'" > NEXT QUESTION </button>
                  <br />

              <button  class="btn btn-block btn-md btn-primary" onclick="confirmation();" > FINAL SUBMIT </button>
              <br />
              </div>
              <?php }

              /* else if($qid==20 || $qid==40){ ?>
               <div >
                 <br />

              <br />
               </div>
               else
             { ?>
               <button  class="btn btn-block btn-lg btn-primary" onclick="confirmation();" > FINAL SUBMIT </button>
             <?php }  */
             else if($qid==30)
             {
               ?>
               <h2>Next set of questions will be uploaded at 3rd Feb, 12am </h2>
          <?php   }
             else {
                 $upd1="Update users set submit=1 where id='$userid'";
                 $upres=mysqli_query($con,$upd1) or diemysqli_error($con);
              ?>
            <!--  <h2>Next set of questions will be uploaded at: </h2> -->
              <h2>Thank You for playing Round 1!</h2>
             <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>
       <?php } ?>

          </div>
        </div>
      </div>
    </header>

<?php
}
else{
    $del="Delete from quiz_users where qid='$qid' and uid='$userid'";
    $del_q=mysqli_query($con,$del) or die(mysqli_error($con));
    ?>
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Incorrect Answer!</h1>
            <br />

          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mx-auto">

                <div>
                  <button  class="btn btn-block btn-md btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid; ?>'" > GO BACK</button>




               <button  class="btn btn-block btn-md btn-primary" onclick="confirmation();" > FINAL SUBMIT </button>
                <br />
                </div>
             <button  class="btn btn-block btn-md btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>


          </div>
        </div>
      </div>
    </header>

<?php
}
}

?>
 </body>



</html>
