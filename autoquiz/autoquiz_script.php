


<?php
require 'includes/common.php';
$qid=$_GET['id'];
$ans=$_POST['ans'];

$uid=$_SESSION['id'];
$se="Select submit from users where id='$uid' ";
$ser=mysqli_query($con,$se) or die(mysqli_error($con));
$row=mysqli_fetch_array($ser);
if($row[0]=='1')
    header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

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




$userid=$_SESSION['id'];
$insquery="Insert into quiz_users(qid,uid)values('$qid','$userid')";
$insres= mysqli_query($con, $insquery) or die(mysqli_error($con));

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
$score=$row['score']+10;

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
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <?php  if($qid==1) { ?>
                <div class="col-12 col-md-6">
                  <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid+1; ?>'" > NEXT QUESTION </button>
                  <br />
                </div>
              <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button>
               
               <?php } else
             { ?>
               <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button>
             <?php } ?>
             <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>
      
            
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
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            
                <div class="col-12 col-md-3">
                  <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid; ?>'" > GO BACK</button>
                <br/>  
                </div>
             
           
               <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button>
             
             <button  class="btn btn-block btn-lg btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>
      
            
          </div>
        </div>
      </div>
    </header>
  
<?php     
}
?>
 </body>
    
    
    
</html>


