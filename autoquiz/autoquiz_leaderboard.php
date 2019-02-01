<?php
require 'includes/common.php';
$email=$_SESSION['email'];


?>
<html>
    <head>

        <meta charset="UTF-8">
       <link rel="stylesheet" href="css4/style.css">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOMANIA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor1/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css1/landing-page.min.css" rel="stylesheet">


   <link rel="stylesheet" href="css4/style.css">
  </head>
    <body>

        <?php
        include 'navbar.php';
          $c=1;
        $sel="Select name,score,submitdate from users order by score desc, submitdate asc";
        $selres=mysqli_query($con,$sel);

        ?>
        <header>
        <br />
        <br />
        <br />
         <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">LEADERBOARD</h1>
        <table>
            <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Score</th>
           <th>Time</th>
            </tr>
            </thead>
            <tbody>
        <?php while($row=mysqli_fetch_array($selres))



                { ?>

            <tr>
                <td><b><?php echo $c; ?></b></td>
                <td><b><?php echo $row['name']; ?></b></td>

                <td><b><?php echo $row['score']; ?></b></td>
                 <td><b><?php echo $row['submitdate'] ; ?></b></td>

            </tr>


            <?php
            $c+=1;
        } ?>
            </tbody>
        </table>
        </header>
         <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor1/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor1/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor1/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js1/creative.min.js"></script>

    </body>
</html>
