<?php
    session_start(); 
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .destination-hub {
            font-size: 20px;
            font-weight: bold;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5); /* add a subtle shadow for depth */
            color: #FF9900; /* deeper orangish-yellow color */
        }

        .destination-hub .hub {
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8); /* add a stronger shadow for the "HUB" text */
            color: #FF9900; /* match the color of the "Destination" text */
        }

        .destination-hub {
            transform: perspective(100px) rotateX(10deg); /* add a 3D effect */
            transform-style: preserve-3d; /* preserve the 3D effect */
        }

        .style1{
            font-size:20px;
        }

        .home-slider {
  position: relative;
}

.swiper-slide {
  width: 100%;
  height: 100vh; /* Set the height of each slide */
  background-size: cover;
  background-position: center;
  transition: all 1.5s ease-in-out;
}

.swiper-slide-active {
  transform: scale(1.1); /* Scale the active slide */
}

.swiper-button-next, .swiper-button-prev {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
  cursor: pointer;
}

.swiper-button-next {
  right: 20px;
}

.swiper-button-prev {
  left: 20px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <!-- Home Section Start -->
<section class="home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide" style="background-image:url(images/home-slide-1.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>travel arround the world</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background-image:url(images/home-slide-2.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>discover the new places</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background-image:url(images/home-slide-3.jpg)">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>make your tour worthwhile</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- Home Section End -->
    <!-- Services Section Start-->
    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box" style="background-color: blue;">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box" style="background-color: blueviolet;">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box" style="background-color: darkcyan;">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box" style="background-color: #FF9900;">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box" style="background-color:lightsalmon;">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box" style="background-color:#32CD32;">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Home -> About Section Start -->
    <section class="home-about">
        <div class="image">
            <img src="images/aboutUs.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Destination Hub is your gateway to unforgettable travel experiences. Our team of passionate explorers curates adventures that blend culture, community, and excitement. We believe travel should be accessible and enjoyable for all. Join us in discovering the world's hidden gems and creating lifelong memories.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- Home -> About Section End-->
    <!-- Home -> Package Section Start -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container" id="box">
                <!-- <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, numquam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, numquam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div> 
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, numquam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>--> 
        </div>
        <div class="load-more">
                <a href="package.php" class="btn">load more</a>
        </div>
    </section>
    <!-- Home -> Package Section End -->
    <!-- Home -> Offer Section Start -->
    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, eum! Repellat odio tenetur doloribus. Deserunt suscipit excepturi officia enim dolorum.</p>
            <a href="package.php" class="btn">book now!</a>
        </div>
    </section>
    <!-- Home -> Offer Section End -->
    <!-- Footer Section start -->
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
                <script>
                    // Initialize Swiper
var swiper = new Swiper('.home-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
<script src="trip.json"></script>
    <script>
        var s="";
        for(var i=0;i<3;i++){
            var pname=Object.keys(places[i])[0]
            var obj=places[i][pname]
            s+=`<div class="box">
                <div class="image">
                    <img src="${obj.images[0]}" alt="">
                </div>
                <div class="content">
                    <h3>${pname}</h3>
                    <p>Duration : ${obj.duration}<br> Price : ${obj.price}</p>
                    <a href="place.php?pname=${pname}" class="btn">book now</a>
                </div>
            </div>`
            document.getElementById("box").innerHTML=s;
        }
    </script>
</body>
</html>
