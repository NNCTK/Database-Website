<?php

        error_reporting(0); 
        require 'connectdb.php';
        session_start();
        
         $session_id = $_SESSION['id'];
        
        $qry_user = "SELECT * FROM register WHERE id = '$session_id'";
        $result_user = mysqli_query($dbcon, $qry_user);
        if($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
            $s_Fname = $row_user['Fname'];
            $s_Lname = $row_user['Lname'];
            $s_Location = $row_user['Location'];
            $s_Pnum = $row_user['Pnum'];
            mysqli_free_result($result_user);              
        }
       
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>FATS AND ANGRY</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

		<!-- Site Icons -->
    <link rel="shortcut icon" href="images/angry.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
<<header class="top-navbar">

		<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#f7ce48;">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/LOGO.png" width="160" height="100" class="rounded" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<p>|</p>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<p>|</p>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Gallery & Review</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="gallery.php">Gallery</a>
								<a class="dropdown-item" href="review.php">Review</a>
							</div>
						</li>
						<p>|</p>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <a href="shop.php"><img src="images/odering_icon.png" width="30" height="30"></a>
            <li class="nav-item"><a class="nav-link" href="Login_frm.php">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<nav>&nbsp;</nav>
</header>
	<!-- End header -->

	<!-- Start Menu -->
	<div class="menu-box">
            <div class="container"><br><br><br><br>
                    
			<?php

$query1 = "SELECT * FROM register ORDER BY id asc" or die("Error:" . mysqli_error()); 

$result1 = mysqli_query($dbcon, $query1); 

//ใช้ตารางในการจัดข้อมูล

$row = mysqli_fetch_array($result1);
   echo "$s_Fname $s_Lname";  ?><br> <?php
   echo "$s_Location"; ?><br> <?php
   echo "$s_Pnum"; ?><br> <?php
     ?>
   
        <form method="post" action="menu_insert.php" />
        
         <?php
  echo "<tr>";       
  echo "<table border='1' align='center' width='500'><br>";
//หัวข้อตาราง
    echo "<tr align='center' bgcolor='#CCCCCC'><td>Menu</td><td>Total</td><td>Transfer proof</td><td>Time</td><td>status</td></tr>";
     $query = "SELECT * FROM  uploadfile ORDER BY fileID DESC";
        $result = mysqli_query($dbcon, $query);  
        $j = 1;
  while ($row = mysqli_fetch_array($result)){ 
    echo "<td align='center'>".  $j  ."<br>";
   echo "<td align='center'>". $row["total_1"] .  " baht</td>";
     $j = $j +1;
   
  echo "<td align='center'>"."<img src='fileupload/".$row["fileupload"]."' width='100'>"."</td>";
  
  echo "<td align='center'>" .$row["dateup"] .  "</td>";
  echo "<td align='center' font='red' > รอตรวจสอบ  </td>";
  echo "</tr>";
     }  
    

echo "</table>";
//5. close connection
mysqli_close($dbcon);
?>
	</div>
            </div>
	<!-- End Menu -->
        

	<!-- Start Footer -->
	<footer class="footer-area bg-drak"  style ="background-color:#0d256e">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3">
					<h3>Time</h3>
					<p><span class="text-color:white">เปิดทุกวัน(Open everyday)</p>
					<p><span class="text-color:white">- เปิด(open) :</span> 11:00 AM </p>
					<p><span class="text-color:white">- ปิด(Close) :</span> 20:00 Pm </p>
				</div>
				<div class="col-md-5">
					<h3>address</h3>
					<p class="text-color:white">- 16 ซอยเจริญกรุง 46 อารีย์  บางรัก กรุงเทพมหานคร 10500</p>
					<p class="text-color:white">- 16 Charoen Krung 46 Alley, Bang Rak, Bangkok 10500</p>
				</div>
				<div class="col-md-4">
					<h3>Contact</h3>
					<p class="text-color:white"><img src="images/line.png" width = "30" height="30"> &nbsp;&nbsp;LINE : fatsandangry</p>
					<p class="text-color:white"><a href= "https://web.facebook.com/fatsandangry/?_rdc=1&_rdr"><img src="images/facebook.png"width = "30" height="30"> &nbsp;&nbsp;FB : fatsandangry</p></a>
					<p class="text-color:white"><a href= "https://www.instagram.com/fatsandangry/?fbclid=IwAR30V22ey850B5gRcuiNdDqKw_N3VfS-QqvAaMm7KwUbg5SLAZQt3GudIRM"><img src="images/instagram.png" width ="30" height="30">&nbsp;&nbsp;IG : fatsandangry</p></a>
					<p class="text-color:white"><img src="images/phone.png" width = "30" height="30"> &nbsp;&nbsp;TEL.:097-238-0935</p>
					</div>
					</div>
					</div>
					<br><br><br><br>
					</footer>
         <!-- End Footer -->

         <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

         <!-- ALL JS FILES -->
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
           <!-- ALL PLUGINS -->
         <script src="js/jquery.superslides.min.js"></script>
         <script src="js/images-loded.min.js"></script>
         <script src="js/isotope.min.js"></script>
         <script src="js/baguetteBox.min.js"></script>
         <script src="js/form-validator.min.js"></script>
           <script src="js/contact-form-script.js"></script>
           <script src="js/custom.js"></script>
       </body>
       </html>
