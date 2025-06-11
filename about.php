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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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
            <?php echo $uname;?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header Section End -->
    <!-- About Section Start-->
    <div class="heading" style="background: url(images/header-bg-1.png) no-repeat">
        <h1>About Us</h1>
    </div>
    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We're a team of travel enthusiasts passionate about helping people explore the world. Our journey began with a life-changing trip that showed us the impact of travel on one's life. Since then, we've been dedicated to creating unforgettable experiences for our customers. We believe that travel has the power to broaden our perspectives, challenge our assumptions, and bring us closer together.</p>
            <p>At Destination HUB, we're committed to providing personalized travel solutions that exceed expectations. Our team of experienced travel professionals is dedicated to providing exceptional service and ensuring an unforgettable experience. We take the time to understand our customers' needs and preferences, tailoring every trip to their unique requirements. Whether you're a seasoned traveler or embarking on your first adventure, we're here to help you create memories that will last a lifetime.</p>
            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-map"></i>
                    <span>top distnations</span>
                </div>

                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>

                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide services</span>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Reviews Section Start -->
    <section class="reviews">
        <h1 class="heading-title"> client reviews</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>As an educator, I was impressed by DestinationHUB's 'Edutrails' series. The tours were educational, well-organized, and engaging for our students. They explored historical sites, gaining deeper insights into their subjects. The team's professionalism and enthusiasm made the experience enjoyable for both students and teachers. I highly recommend their educational tours to other schools and institutions.</p>
                    <h3>SK SHAHIL</h3>
                    <span>traveler</span>
                    <img src="images/pic-1.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>DestinationHUB made our trip to Rajasthan unforgettable. From the well-curated itineraries to the attentive guides, everything was perfect. The one-day tour of Jaisalmer was a highlight—exploring the forts and sand dunes was truly magical. Highly recommend DestinationHUB for anyone looking for a memorable travel experience!</p>
                    <h3>S RAVINDRA</h3>
                    <span>traveler</span>
                    <img src="images/pic-2.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>DestinationHUB's customer service exceeded our expectations. We had a minor issue during our trip, but the support team was quick to resolve it with professionalism and care. The overall experience was fantastic, and we appreciated the extra effort to ensure everything went smoothly. Thank you, DestinationHUB!</p>
                    <h3>RISHIKESD DAS</h3>
                    <span>traveler</span>
                    <img src="images/pic-3.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Destination Hub's passion for travel is contagious! Their team is dedicated to creating unique experiences that leave a lasting impact. From adventure-seekers to relaxation enthusiasts, they have something for everyone. I'm already planning my next adventure with them!</p>
                    <h3>priyadarshini sinha</h3>
                    <span>traveler</span>
                    <img src="images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I was blown away by the attention to detail and personalized service from Destination Hub. Their packages cater to all interests and budgets, and the staff is always available to answer questions. I've already booked my next trip with them!</p>
                    <h3>pratik kumar sinha</h3>
                    <span>traveler</span>
                    <img src="images/pic-5.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Destination Hub exceeded my expectations! Their team curated an unforgettable adventure that blended culture, community, and excitement. The guides were knowledgeable and friendly, and the accommodations were top-notch. I highly recommend Destination Hub for any travel enthusiast!</p>
                    <h3>Emily R</h3>
                    <span>traveler</span>
                    <img src="images/pic-6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Section End -->
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