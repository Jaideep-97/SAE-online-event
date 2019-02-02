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
    <link href="css1/landing-page.min.css" rel="stylesheet">
     <script src="autoquiz-submit.js"></script>
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
<script>
       function confirmation()
       {
            if(!confirm("Are you sure you want to submit? You cannot attempt anymore questions if submitted."))
      window.location="../index.php";
  else
      window.location="autoquiz_submit.php";


       }
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

        <span id="time" class="font-normal"></span>
        <a class="btn btn-primary" href="autoquiz_leaderboard.php">Leaderboard</a>
      </div>
    </nav>

        <?php
        include 'if_answered.php';
        ?>




<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h3 class="mb-5">Next set will be uploaded at 3rd Feb, 12am.</h3>
            <button  class="btn btn-block btn-md btn-primary" onclick="confirmation();" > FINAL SUBMIT </button>

          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">




          </div>
        </div>
      </div>
    </header>


    </body>



</html>
