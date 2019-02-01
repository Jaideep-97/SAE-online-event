<?php
require '../includes/common.php';


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
    <link href="css/landing-page.min.css" rel="stylesheet">
    <script>
      (function(window, location) {
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
}(window, location));
</script>
     <script src="autoquiz-qual.js"></script>


  </head>

  <body>
<p>
                                          </p>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">HOME</a>


        <a class="btn btn-primary" href="autoquiz_leaderboard.php">Autoquiz Leaderboard</a>
      </div>
    </nav>

        <?php
        include 'if_answered.php';
        ?>

           <?php
            $uid=$_SESSION['id'];
         $upd="Update users set submit=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
           $sel="Select question from quiz where id='$qid'";
           $sel_query=mysqli_query($con,$sel) or die(mysqli_error($con));
           $arr=mysqli_fetch_array($sel_query);
           ?>


<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h3 class="mb-5">Successfully submitted</h3>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

              <p>Check results in:
                   <span id="time" class="font-normal"></span>
        </p>



          </div>
        </div>
      </div>
    </header>


    </body>



</html>
