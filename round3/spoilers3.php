<?php
require 'includes/common.php';
$uid=$_SESSION['id'];
$sel="Select submit3,qual,qual1,qual2,qual3 from users where id='$uid'";
$sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr=mysqli_fetch_array($sel_res);
if($arr[0]==1)
    header('Location:../index.php');
else if($arr[1]==0 || $arr[2]==0 || $arr[3]==0)
{header('Location:../index.php'); }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->
	<head>

                <script src="auto-submit3.js"></script>
                <title>AUTOMANIA</title>

	</head>

                                <?php
                                        include 'ifadded.php';
                                        include 'number_type.php';
                                        include 'header2.php';

        ?>




        <?php
        $userid=$_SESSION['id'];
        $sel_query="Select balance from users where id='$userid'";
        $sel_query_res=mysqli_query($con,$sel_query);
        $row=mysqli_fetch_array($sel_query_res);
        ?>
                        <br />

            <div class="flex flex-1 flex-col md:px-4 pt-25" id="content">

				<!-- Title -->
				<div class="px-6 md:px-0 flex justify-between items-center -order-1">
					<div>
                                            <br />
                                            <h2 class="font-normal">BALANCE:<?php echo $row[0]; ?></h2>
					<br />



                                          <!--     <p class="text-grey-dark mt-2">Interesting Stats</p>-->
					</div>
                                     <div style="float: right ;">    <b>Time left: <span id="time" class="font-normal"></span></b></div>

					<button class="bg-indigo-dark hover:bg-indigo-darker text-white text-sm py-2 px-4 rounded-full transition-normal hover:shadow hover:translate-y-1 active:translate-y-1 focus:outline-none" onclick="location.href='addedlist3.php'">Check added list</button>
				</div>
                                <div class="inline-block md:hidden no-underline border-indigo pb-2 px-2 text-sm mr-2 text-indigo-darkest hover:cursor-pointer js-tab relative" data-tab="section-stats">Items</div>


        <div class="hidden px-6 md:px-0 mt-4 md:flex flex-wrap order-1 md:-order-1 md:shadow-md js-tab-pane " id="section-stats">
					<div class="p-4 px-6 w-full md:w-1/8 rounded md:rounded-r-none bg-white ">
						<h4>3. SPOILERS</h4>
						<table class="mt-4 w-full">
							<thead class="p-2 text-sm leading-loose border-b text-indigo">
								<tr>
									<td>Name</td>
									<td >Type</td>
									<td >Cost</td>
								</tr>
							</thead>
                                                        <tbody class="p-2 leading-loose text-sm">
            <?php
            //$userid=$_SESSION['id'];
            $bal=$row[0];
            $sel_query1="Select * from items where type=3";
            $sel_query_res1=mysqli_query($con,$sel_query1);

            while($row1=mysqli_fetch_array($sel_query_res1))
            {
                ?>
            <tr class="border-b">
            <td class="py-2"><?php echo $row1['name']; ?></td>
            <td class="py-2"><?php echo $row1['type']; ?></td>
            <td class="py-2"><?php echo $row1['cost']; ?></td>

            <?php if(if_added($row1['id'])==0 && $row1['cost']<=$bal)
            { ?>
            <?php if( count_type($row1['type'])<1){ ?>

            <td> <button class="bg-indigo-dark hover:bg-indigo-darker text-white text-sm py-2 px-4 rounded-full transition-normal hover:shadow hover:translate-y-1 active:translate-y-1 focus:outline-none" class="disabled" onclick="location.href='additem3.php?id=<?php echo $row1[0]; ?>'" value="ADD ITEM"  >ADD ITEM</a></button></td>
            <?php } } }?>
                                                        </tbody>
        </table>
            <br />
            <button class="bg-indigo-dark hover:bg-indigo-darker text-white text-sm py-2 px-4 rounded-full transition-normal hover:shadow hover:translate-y-1 active:translate-y-1 focus:outline-none" onclick="location.href='tyres3.php'" value="Continue" >BACK</button>

            <button class="bg-indigo-dark hover:bg-indigo-darker text-white text-sm py-2 px-4 rounded-full transition-normal hover:shadow hover:translate-y-1 active:translate-y-1 focus:outline-none" onclick="location.href='aero3.php'" value="Continue" >CONTINUE</button>

                                        </div>
                </div>

            </div>


                <div class="hidden absolute pin-b z-10 lg:relative lg:block w-full lg:w-1/5 bg-grey-lighter-2 px-6 pt-10" id="profile">
				<div class="flex items-center mb-6">
					<svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="avatar">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g transform="translate(-1178.000000, -87.000000)">
								<g transform="translate(1159.000000, 0.000000)">
									<g transform="translate(0.000000, 87.000000)">
										<g transform="translate(19.000000, 0.000000)">
											<circle id="small-circle" fill="#5661B3" cx="30" cy="30" r="30"></circle>
											<path id="moon" d="M30.5,49.7304688 C40.7172679,49.7304688 30.5,43.266096 30.5,33.0488281 C30.5,22.8315603 40.7172679,12 30.5,12 C20.2827321,12 11.0390625,20.6479665 11.0390625,30.8652344 C11.0390625,41.0825022 20.2827321,49.7304688 30.5,49.7304688 Z" fill="#F4E1E0"></path>
											<circle id="big-circle" fill="#070707" cx="31" cy="31" r="11"></circle>
										</g>
									</g>
								</g>
							</g>
						</g>
					</svg>
					 <?php
                                          $uid=$_SESSION['id'];
                                        $select="Select name from users where id='$uid'";
                                        $seq=mysqli_query($con,$select) or die(mysqli_error($con));
                                        $a=mysqli_fetch_array($seq);
                                        ?>
					<div class="ml-3">
						<p>Welcome</p>
						<p class="text-grey-dark mt-1 text-sm"><?php echo $a[0]; ?></p>
					</div>
				</div>
                    <?php
                        $uid=$_SESSION['id'];
                        $sel="Select count(type) from items_users where userid='$uid'";
                        $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                        $arr=mysqli_fetch_array($selres);

                        ?>
                        <div class="my-4 border-t pt-4">
					<h3 class="text-indigo-dark font-normal">You have bought <strong><?php echo $arr[0]; ?> of 11 items</strong> </h3>
                        </div>
                </div>

                        </div>
           <script src="bundle.js" async defer></script>
	</body>
</html>
