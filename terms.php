<?php
    session_start(); 
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
    if(isset($_SESSION['password']) && isset($_SESSION['email']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .card {
            background-color: #f7f7f7;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
        }
        h5 {
            margin-top: 0;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
    <!-- Header Section Start -->
    <section class="header">
        <a href="index.php" class="logo"><span>Destination<span style="color: #FF9900; font-weight: bold;">HUB</span></span></a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="check.php">Check Booking</a>
            <?php
                 if(isset($_SESSION['password']) && isset($_SESSION['email']))
                 {
             ?>
             <a href="logout.php"><i class="bi bi-door-open-fill style1"></i></a>
            <?php
                 }
                else{
            ?>
            <a href="login_form.php"><i class="fa fa-user-circle-o"></i></a>
           <?php
                }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header Section End -->

    <div class="heading" style="background: url(images/header-bg-2.png) no-repeat">
        <h1>Policy</h1>
    </div>

    <!-- About Section Start-->
    <body>
    <div class="card">
    <div class="card-body">
        <h5 id="scroll-amenities" style="font-size:30px;" class="font-weight-bold text-dark mb-1">Payment Policy</h5>
        <div style="font-size:18px;margin-top:1rem">
            <p style="font-size:18px">Advance Booking Fee</p><br>
            <ul>
                <li style="text-align:justify; font-size:16px">30 days or more before date of departure : 25% of total cost</li>
                <li style="text-align:justify; font-size:16px">29 - 20 days before date of departure : 50% of total cost</li>
                <li style="text-align:justify; font-size:16px">19 days or less before date of departure : 100% of total cost</li>
            </ul>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 id="scroll-amenities" style="font-size:30px;" class="font-weight-bold text-dark mb-1">Cancellation Policy</h5>
        <div style="font-size:18px;margin-top:1rem">
            <p style="font-size:18px">You or any member of your party may cancel their travel arrangements at any time. Written notification or an e-mail to that effect from the person who made the booking must be received at our office. The cancellation charges applicable are as per the published cancellation policy below:</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 id="scroll-amenities" style="font-size:30px;" class="font-weight-bold text-dark mb-1">Terms & Conditions</h5>
        <div style="font-size:18px;margin-top:1rem">
            <p style="font-size:18px">If we change or cancel your holiday We do plan the arrangements in advance. It is unlikely that we will have to make any changes to your travel arrangements. Occasionally, we may have to make changes and we reserve the right to do so at any time. If there are any changes, we will advise you of them at the earliest possible date. We also reserve the right under any circumstances to cancel your travel arrangements by assigning reasons to you.</p>
        </div>
    </div>
</div>
    <!-- About Section End-->

    
    <!-- Footer Section Start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
                <a href="terms.php"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="terms.php"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="mailto:destinationhub009@gmail.com?subject=Contact%20from%20Website&body=Hello%20from%20Destination%20Hub!""><i class="fas fa-envelope"></i>destinationhub009@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Asansol, India</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-youtube"></i>youtube</a>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>
<?php
    }
    else
    {
        header("Location:login_form.php");
        exit();
    }
?>