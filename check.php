<?php
session_start();
$uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
require_once 'db.php'; // Include your database connection file

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Bookings</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <a href="check_bookings.php">Check Booking</a> <!-- Link to check bookings -->
            <?php
                 if(isset($_SESSION['password']) && isset($_SESSION['email'])) {
            ?>
            <a href="logout.php"><i class="bi bi-door-open-fill style1"></i></a>
            <?php
                 } else {
            ?>
            <a href="login_form.php"><i class="fa fa-user-circle-o"></i></a>
            <?php
                 }
            ?>
            <?php echo $uname;?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="heading" style="background: url(images/header-bg-1.png) no-repeat">
        <h1>Your Upcoming Plans</h1>
    </div>
    <!-- Header Section End -->

    <div class="content container mt-4">
        <?php
        if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
            $email=$_SESSION['email'];
            $query = "SELECT * FROM book_form WHERE email='$email' and arrivals >= CURDATE() ORDER BY arrivals ASC";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                echo "<h2>Upcoming Bookings:</h2>";
                echo "<table class='table table-striped table-bordered'>";
                echo "<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Depart Address</th><th>Location</th><th>Guests</th><th>Travel Date</th><th>Price</th><th>Cancellation</th></tr></thead>";
                echo "<tbody>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['guests'] . "</td>";
                    echo "<td>" . $row['arrivals'] . "</td>";
                    echo "<td>" . $row['price'] * $row['guests'] . "</td>";
                    echo "<td class='text-center'>
                            <button class='btn btn-danger' onclick='confirmDelete(" . $row['id'] . ")'>
                                <i class='bi bi-trash'></i>
                            </button>
                        </td>";
                    echo "</tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "<h2>No upcoming bookings found.</h2>";
            }
        } else {
            header("Location: login_form.php");
            exit();
        }

        $conn->close();
        ?>
    </div>

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

    <!-- Bootstrap JS link -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this?")) {
            window.location.href = "delete.php?id=" + id;
            }
            }

    </script>
</body>
</html>