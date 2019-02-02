<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->
	<head>
            <style>
                a{
                    text-decoration: none;
                }

                </style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <title>AUTOMANIA</title>
<meta name="description" content="A responsive web app template with common components like profile, list, tabs, menu views. Made for Codrops exclusively.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="output.css">
		<link rel="stylesheet" href="node_modules/tippy.js/dist/themes/light.css">
	</head>
	<body class="bg-grey-lighter font-sans antialiased">
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="bg-indigo-darker text-center p-4 px-6 flex items-center">
			<div class="hidden lg:block lg:w-1/4 xl:w-1/5 pr-8">
                            <a href="../index.php" class="text-sm text-right text-white py-2 px-3 hover:text-grey-dark no-underline hidden lg:block lg:w-1/3 px-6"><b>AUTOMANIA</b></a>
			</a>
			</div>
			<div class="lg:hidden pr-3" id="mobile-nav-trigger">
				<div class="toggle p-2 block"><span></span></div>
			</div>
			<div class="flex flex-grow items-center lg:w-3/4 xl:w-4/5">
				<span class="relative w-full">
					<div class="absolute search-icon" style="top: .5rem; left: .8rem;">

				</div>
			</span>
				<a href="logout.php" class="text-sm text-right text-white py-2 px-3 hover:text-grey-dark no-underline hidden lg:block lg:w-1/3 px-6">LOGOUT</a>
			</div>
		</div>
		<!-- Main -->
		<div class="flex">
			<!-- Side Nav -->
			<nav class="absolute lg:relative lg:flex lg:text-sm bg-indigo-darker lg:bg-transparent pin-l pin-r py-4 px-6 lg:pt-10 lg:pl-12 lg:pr-6 -mt-1 lg:mt-0 overflow-y-auto lg:w-1/5 lg:border-r z-40 hidden">
				<ul class="list-reset mb-8 w-full">
					<li class="ml-2 mb-4 flex">
                                            <a href="../index.php">
						<img src="./images/home-default.svg" alt="home-icon" class="w-4 h-4 mr-2">
						<div style="color:blue;">HOME</div>
                                            </a>
					</li>
                                         <li class="ml-2 mb-4 flex">
                                            <a href="../rules.php">
						<div style="color:blue;">RULES</div>
                                            </a>
					</li>
					<li class="ml-2 mb-4">
						<div class="flex" id="sidenav-categories-trigger">
							<img src="./images/category-default.svg" alt="home-icon" class="w-4 h-4 mr-2">
							<div class="hover:cursor-pointer text-white lg:text-indigo-darkest no-underline font-medium w-full relative">
								ROUNDS
								<div class="pointer-events-none absolute pin-y pin-r flex items-center px-1 text-grey-darker" id="sidenav-icon">
									<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
										<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
									</svg>
								</div>
							</div>
						</div>
						<ul class="text-grey lg:text-grey-dark list-reset leading-loose mt-2" id="sidenav-categories">
							<?php

                                                        $uid=$_SESSION['id'];
                                                        $sel="Select submit1,submit2,submit3,submit4 from users where id='$uid'";
                                                        $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                                                        $arr=mysqli_fetch_array($selres);
                                                        if($arr[0]==1) {
                                                        ?>
                                                        <li class="hover:text-indigo-dark hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4">ROUND 1</li>
                                                        <?php } else { ?>
							<li class="text-indigo-lighter lg:text-indigo-darker font-medium flex justify-between items-center hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4 mobile-home-trigger">
                                                            <a href="shop.php"><span style="color:blue;">ROUND 1 TRACK:PLANE</span>
                                                            </a>
							</li>
                                                        <?php } ?>
                                                        <?php
                                                        if($arr[1]==1) {
                                                        ?>
                                                        <li class="hover:text-indigo-dark hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4">ROUND 2</li>
                                                        <?php } else { ?>
							<li class="text-indigo-lighter lg:text-indigo-darker font-medium flex justify-between items-center hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4 mobile-home-trigger">
                                                            <a href="shop2.php"><span style="color:blue;">ROUND 2 TRACK:SANDY</span>
                                                            </a>
							</li>
                                                        <?php } ?>
                                                         <?php
                                                        if($arr[2]==1) {
                                                        ?>
                                                        <li class="hover:text-indigo-dark hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4">ROUND 3</li>
                                                        <?php } else { ?>
							<li class="text-indigo-lighter lg:text-indigo-darker font-medium flex justify-between items-center hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4 mobile-home-trigger">
                                                            <a href="shop3.php"><span style="color:blue;">ROUND 3 TRACK:HILLY</span>
                                                            </a>
							</li>
                                                        <?php } ?>
                                                         <?php
                                                       if($arr[3]==1) {
                                                        ?>
                                                        <li class="hover:text-indigo-dark hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4">ROUND 4</li>
                                                        <?php } else { ?>
							<li class="text-indigo-lighter lg:text-indigo-darker font-medium flex justify-between items-center hover:cursor-pointer transition-normal ml-1 border-l border-grey-dark pl-4 mobile-home-trigger">
                                                            <a href="shop4.php"><span style="color:blue;">ROUND 4 TRACK:ICY</span>
                                                            </a>
							</li>
                                                        <?php } ?>
						</ul>
					</li>
					<li class="ml-2 mb-4 ">
							<img src="./images/category-default.svg" alt="home-icon" class="w-4 h-4 mr-2">
							<div class="hover:cursor-pointer text-white lg:text-indigo-darkest no-underline font-medium w-full relative">
								TABLES

							</div>

                                            <ul class="text-grey lg:text-grey-dark list-reset leading-loose mt-2" id="sidenav-categories">
                                                <?php
                                                if($arr[0]==1) { ?>
                                                <li >
                                                    <a href="../tables/r1table.php"><span style="color:blue;">ROUND 1 TABLE</span>
                                                            </a>
							</li>
                                                <?php }
                                                        ?><?php
                                                     if($arr[1]==1) {
                                                        ?>
                                                        <li >
                                                            <a href="../tables/r2table.php"><span style="color:blue;">ROUND 2 TABLE</span>
                                                            </a>
                                                     </li><?php }
                                                     if($arr[2]==1) {
                                                        ?>
                                                        <li >
                                                            <a href="../tables/r3table.php"><span style="color:blue;">ROUND 3 TABLE</span>
                                                            </a>
                                                     </li><?php }
                                                     if($arr[3]==1) {
                                                        ?>
                                                        <li >
                                                            <a href="../tables/r4table.php"><span style="color:blue;">ROUND 4 TABLE</span>
                                                            </a>
                                                     </li><?php } ?>
                                                    <?php if($arr[0]==1 || $arr[1]==1 || $arr1[2]==1 || $arr[3]==1) {
                                                        ?>
                                                     <li >
                                                         <a href="../tables/leaderboard.php"><span style="color:blue;">LEADERBOARD</span>
                                                            </a>
                                                     </li>
                                                 <?php   } ?>

					</li>
					<li class="ml-2 mb-4 flex lg:hidden">
						<img src="./images/profile-default.svg" alt="profile-icon" class="w-4 h-4 mr-2">
						<div class="hover:cursor-pointer text-white lg:text-indigo-darkest no-underline font-medium" id="mobile-profile-trigger">Profile</div>
					</li>
				</ul>
			</nav>

        </body>
</html>
