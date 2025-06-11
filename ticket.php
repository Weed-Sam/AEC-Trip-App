<?php
    session_start(); 
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
    $id = $_SESSION['id'];
    // Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "book_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the book_form table
$sql = "SELECT * FROM book_form where id='$id'";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Fetch the data
    $row = mysqli_fetch_array($result);

    // Display the data in the ticket
    $id = $row['id'];
    $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $location = $row['location'];
        $guests = $row['guests'];
        $arrivals = $row['arrivals'];
        $price = $row['price'];

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "No results found";
}
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

/* ticket */
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }
        .ticket-container {
  width: 800px;
  height: 425px;
  padding: 20px;
  margin: 40px auto;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.ticket {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 350px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.left-section {
  width: 30%;
  padding: 20px;
  background-color: #00b33c;
  color: #fff;
  border-radius: 10px 0 0 10px;
}

.right-section {
  width: 70%;
  padding: 20px;
  background-color: #fff;
  border-radius: 0 10px 10px 0;
}

.event-data {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.event-details {
  width: 60%;
}

.image-section {
  width: 40%;
  text-align: center;
}

.event-info {
  margin-bottom: 20px;
}

.organizer-info {
  margin-bottom: 20px;
}

.print-ticket {
  text-align: center;
  margin-top: 20px;
}

.print-ticket a {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.print-ticket a:hover {
  background-color: #444;
}
.admit-barcode img{
  width: 180px; /* set the width to 80% of the parent element */
  height: 180px; /* set the height to 60% of the viewport height */
  border-radius: 5px;
}
.image-section img{
  width: 300px; /* set the width to 80% of the parent element */
  height: 270px; /* set the height to 60% of the viewport height */
  padding-right: 100px;
  padding-left: -700px;
  border-radius: 15px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>

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
    
    <div class="ticket-container">
    <form method="GET">
        <div class="ticket">
            <div class="left-section">
                <h1>DestinationHUB</h1>
                <p class="style1">Your ticket to the world</p>
                <div class="admit-barcode">
                    <img src="https://picsum.photos/200/303" alt="Barcode">
                </div>
            </div>
            <div class="right-section">
                <div class="event-data">
                    <div class="event-details">
                        <h2>Event Details</h2>
                        <div class="details-table">
                            <div class="row">
                            <div class="column">
                                    <p>Booking ID:</p>
                                    <p><b><?php echo $id; ?></b></p>
                                </div>
                                <div class="column">
                                    <p>Name:</p>
                                    <p><b><?php echo $name; ?></b></p>
                                </div>
                                <div class="column">
                                    <p>Email:</p>
                                    <p><b><?php echo $email; ?></b></p>
                                </div>
                                <div class="column">
                                    <p>Phone:</p>
                                    <p><b><?php echo $phone; ?></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <p>Departure City:</p>
                                    <p><b><?php echo $address; ?></b></p>
                                </div>
                                <div class="column">
                                    <p>Event Location:</p>
                                    <p><b><?php echo $location; ?></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <p>Guests:</p>
                                    <p><b><?php echo $guests; ?></b></p>
                                </div>
                                <div class="column">
                                    <p>Travel Date:</p>
                                    <p><b><?php echo $arrivals; ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-section">
                      <img src="https://picsum.photos/200/304" alt="Event Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="print-ticket">
          <a href="#" onclick="printTicket()">Print Ticket</a>
        </div>
    </form>
</div>
    <script>
        function printTicket() {
            var ticketContainer = document.querySelector('.ticket-container');
            var printWindow = window.open('', '_blank');
            printWindow.document.write(ticketContainer.outerHTML);
            printWindow.document.close();
            printWindow.print();
        }
    </script>

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
