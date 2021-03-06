<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANITS BloodBank & Donor Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4" style="color:#B32320; font-family:'abril fatface';"><b>Welcome to ANITS BloodBank & Donor Management System</b></h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header" style="color:#B32320; font-family:'abril fatface';"><b>The need for blood</b></h4>
                   
                        <p class="card-text" style=" color:#3A3A3A; font-family:'cabin';padding-left:2%;"> Every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors.<br><br>Blood donors play a vital role in the healthcare of patients in your community. 37% of the population is eligible to donate blood, yet only 5% actually do. With every blood donation, you are providing strength, hope and courage to patients and their families in your local hospitals.

. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header" style="color:#B32320; font-family:'abril fatface';"><b>Donation Eligibilities</b></h4>
                   
                        <p class="card-text" style=" color:#3A3A3A; font-family:'cabin';padding-left:2%;">To be eligible to donate whole blood, plasma or platelets, you must be:

<br><b>*</b>In good health.
<br><b>*</b>At least 16 or 17 years old, depending on the law in your state. Some states allow legal minors to donate with parent permission. While there's no legal upper age limit, policies may vary between individual donor centers.
<br><b>*</b>At least 50 kilograms (about 110 pounds).
<br><b>*</b>Able to pass the physical and health-history assessments.
<br><b>*</b>Eligibility requirements differ slightly between different types of blood donation.. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header" style="color:#B32320; font-family:'abril fatface';"><b>Who should not give blood? </b></h4>
                   
                        <p class="card-text" style=" color:#3A3A3A; font-family:'cabin';padding-left:2%;">The blood service is concerned with the welfare of both the blood donor and the recipient (patient).  Donors are often asked not to donate blood for a period of time in the interests of their safety and/or that of the blood supply.

<br><br>You should not give blood if your own health might suffer as a result. The first concern of the blood service is to ensure that blood donation does no harm to the blood donor. You should not donate blood if:

<br><b>*</b>You are feeling unwell
<br><b>*</b>You are anaemic
<br><b>*</b>You are pregnant, have been pregnant within the last year or are breastfeeding
<br><b>*</b>You have certain medical conditions, which might make you an unsuitable donor 
<br><b>*</b>You are taking certain medications, such as antibiotics. </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
 
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2 style="color:#B32320; font-family:'abril fatface';"><b>BLOOD GROUPS</b></h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="color:#B32320; font-family:'abril fatface';"><b>UNIVERSAL DONORS AND RECIPIENTS</b></h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" style="background-color:#B32320;color:white;" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->
	

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
