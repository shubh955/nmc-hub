<?php 
session_start();

$email=$_SESSION['email'];
$mobile=$_SESSION['mobile'];
$username=$_SESSION['username'];
	  
	$areasqft=$_SESSION['areasqft'];
     $taxnumber=$_SESSION['taxnumber'];
     $floornumber=$_SESSION['floornumber'];
	  $electricnumber=$_SESSION['electricnumber'];
	   $aadhar=$_SESSION['aadhar'];
	 $waternumber=$_SESSION['waternumber'];
     $address=$_SESSION['address'];
     $facing=$_SESSION['facing'];
	   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NMC HUB PRODUCT PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  
   



 <style>
  body{
  background:lightblue;
  
  }
  .newarrival{
	background: green;
	width:100px;
	color:white;
	font-size12px;
	font-weight:bold;
}
</style>
</head>

<body>
<body>
      <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html"><span class="flaticon-bee mr-1"></span>NMC HUB</a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text d-flex align-items-center">
						    	<span>informcojag@gmail.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text d-flex align-items-center">
						    	<span>Call Us: +917620379723</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center align-items-stretch">
					    	<p class="mb-0 d-flex d-block">
					    		<a href="contact.html" class="btn btn-primary d-flex align-items-center justify-content-center">
					    			<span>Request A Quote</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="login.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


<div class="containersss">
    <div class="row">
         <div class="col-md-5">
		 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		 
         </div>
         <div class="col-md-7">
		 <p class="newarrival text-center">PLOT NO.:
		 <?php   
	 echo " $floornumber";
		 ?></p>
		 <h3><b> OWNER's FULL NAME </b><?php   
		 echo ":$username";
	 ?></h3>
		 
		 <p ><b>Aadhar Number:</b><?php   
		 echo " $aadhar";
		?></p>
		 <p><b>Location:</b> <?php   
 echo "$address";
		 ?></p>
         <p><b>Electricity Consumer Number:</b> <?php   
	 echo "$electricnumber";
	 ?></p>
         <p><b>Superbuilt_up Area:</b> <?php   
	echo " $areasqft";
	 ?></p>
		 <p><b>Tax Number: </b> <?php   
echo "$taxnumber";
	?></p>
		 <p><b>Water Consumer Number:</b> <?php   
	echo " $waternumber";
		 ?></p>
		 
		
		 
		<a href="http://cpnagpur.sndl.in/Pages/viewbill.aspx"><button type="button" class="btn btn-primary py-3 px-5"> Electricity Bill Pay</button></a>		
<a href="https://www.incometaxindia.gov.in/Pages/tax-services/pay-tax-online.aspx"><button type="button"  class="btn btn-primary py-3 px-5">Tax Payment</button></a>		
<a href="https://www.ocwindia.com/?page_id=118"><button type="button"  class="btn btn-primary py-3 px-5">Water Bill Pay</button></a>		
		</div>
    </div>
</div>










<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo"><span class="flaticon-bee"><a href="login.html"></span>NMC_HUB</h2></a>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
            
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Plot information</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Electric Bill Payment</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Water Bill Payment</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Tax Payment</a></li>
                
              </ul>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Copyright ©2019 All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="http://cojagtech.com/" target="_blank">Cojag </a> <a>and</a> <a href="profile.html" target="_blank">team </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>




</body>
</html>