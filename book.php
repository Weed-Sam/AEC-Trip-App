<?php
    session_start();
    $uname='';
    if(isset($_SESSION['uname']))
    $uname=$_SESSION['uname'];
    $conn = mysqli_connect('localhost' , 'root' , '' , 'book_db');
    $sql="select bid from booking_id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $booking_id=$row['bid'];
    $_SESSION['booking_id']=$booking_id;
    if(isset($_SESSION['password']) && isset($_SESSION['email']))
    {
      $email=$_SESSION['email'];
      $sql="select * from register_form where email='$email'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">

    <style>
      .cont {
        display: inline-block;
        background: var(--black);
        margin-top: 1rem;
        color: var(--white);
        font-size: 1.7rem;
        padding: 1rem 3rem;
        cursor: pointer;
      }
      .cont:hover {
        background-color: var(--main-color);
      }

/* Modal Content */
            
  .modal-content {
    position: absolute;
    top: 40%;
    left: 25%;
    background-color: #fefefe;
    width: 60%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s;
  }
  
  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  
  .modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
  }
  
  .modal-body {padding: 2px 16px;}
  
  .modal-footer {
    padding: 2px 16px;
    background-color:black;
    color: white;
  }
  
  /* Add Animation */
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }
  
  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }
  
  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  
  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }


  /* payment */
body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  
  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }
  
  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }
  
  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }
  
  .col-25,
  .col-50,
  .col-75 {
    padding: 6px 6px;
  }
  
  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }
  
  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  label {
    margin-bottom: 10px;
    display: block;
  }
  
  .icon-container {
    margin-bottom: 20px;
    padding: 7px 2px;
    font-size: 24px;
  }
  
  .btns {
    background-color: #04AA6D;
    color: white;
    padding: 12px;
    margin: 10px 2px;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  
  .btns:hover {
    background-color: #45a049;
  }
  
  a {
    color: #2196F3;
  }
  
  hr {
    border: 1px solid lightgrey;
  }
  
  span.price {
    float: right;
    color: grey;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
  #zip {
    width: 100px;
  }
  #cvv {
    width: 100px;
  }
  #state {
    margin-left: 10px;
  }
  label[for="state"] {
    margin-left: 10px;
  }

    </style>
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
    <!-- Book Section Start-->
    <div class="heading" style="background: url(images/header-bg-3.png) no-repeat">
        <h1>Book</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">Want to Go For A Memorable Holiday?</h1>

        <form action="book_form.php" method="post" class="book-form" id="book-form">
          <b>Booking id:<?php echo $booking_id;?>
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" value="<?php echo $row['name']; ?>" readonly>
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" value="<?php echo $row['email']; ?>" readonly>
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone" value="<?php echo $row['phone_no']; ?>" readonly>
                </div>

                <div class="inputBox">
                    <span>departure from:</span>
                    <input type="text" placeholder="enter your departure city" name="address" required>
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <?php if(isset($_SESSION['place_name'])) { ?>
                        <input type="text" placeholder="place you want to visit" name="location" value="<?php echo $_SESSION['place_name']; ?>" readonly>
                    <?php } else { ?>
                        <a href="package.php" style="text-decoration: none; display: block;">
                            <button class="inputBox" style="background-color: white; padding: 10px; border: 1px solid black; font-size: 16px; color: var(--light-black);font-family: inherit; cursor: pointer; height: 50px; margin-bottom: 10px; width: 100%; margin-top: 15px;text-align: left; padding-left: 10px;" id="where-to-btn">select a place</button>
                        </a>
                    <?php } ?>
                </div>
                <?php
                    unset($_SESSION['place_name']);
                ?>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="text" placeholder="number of guests" name="guests" id="guests" onkeyup="calc(this.value)" required>
                </div>

                <div class="inputBox">
                    <span>Travel Date :</span>
                    <input type="date" name="arrivals" required>
                </div>

                <div class="inputBox">
                    <span>Amount per person :</span>
                    <?php if(isset($_SESSION['place_price'])) { ?>
                        <input type="number" placeholder="select package to see amount" name="price" id="price" value="<?php echo $_SESSION['place_price']; ?>" readonly>
                    <?php } else { ?>
                        <input type="number" placeholder="select package to see amount" name="price" readonly>
                    <?php } ?>
                </div>

                <div class="inputBox">
                    <span>Total Amount :</span>
                    <input type="text" name="total" id="total">
                </div>


                <?php
                    unset($_SESSION['place_price']);
                ?>
            </div>
        <!-- <button class="btn" name="send" onclick="openPopup()">Continue</button> -->
        <button type="submit" class="cont" name="send" >Continue</button>
       
        
        </form>
        
    </section>


    <?php
          if(isset($_GET['result']))
          {

    ?>
    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Payment</h2>
    </div>
<div class="modal-body">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="ticket.php">
      <h3>Choose Payment Method</h3>
        <div class="row">
          <div class="col-50">
            <h4><input type="radio" name="Debit Card">  Debit Card</h4>
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
          <h4><input type="radio" name="Credit Card">  Credit Card</h4>
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
        <input type="checkbox" id="sameadr" name="sameadr" required>
<label for="sameadr">I Accept the Terms & Conditions</label>
<span class="error" style="color: red; display: none;">Please accept the terms and conditions.</span>
        </label>
        <input type="submit" value="Continue to checkout" class="btns">
      </form>
    </div>
  </div>
  <!-- Add these closing div tags -->
  </div>
</div>
<div class="modal-footer">
    <h3><a href="terms.php">Terms & Conditions*</a></h3>
</div>
</div>

</div>

<?php
          }
          ?>
    <!-- Book Section End-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
    <script>
    document.getElementById('where-to-btn').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = 'package.php';
    });
</script>

<script>
    // let popup = document.getElementById("popup");

    // function openPopup(){
    //     popup.classList.add("open-popup");
    // }

    // let cardPaymentRadio = document.getElementById("card-payment");
    // let upiPaymentRadio = document.getElementById("upi-payment");
    // let cardPaymentDetails = document.getElementById("card-payment-details");
    // let upiPaymentDetails = document.getElementById("upi-payment-details");

    // cardPaymentRadio.addEventListener("click", function() {
    //     cardPaymentDetails.style.display = "block";
    //     upiPaymentDetails.style.display = "none";
    // });

    // upiPaymentRadio.addEventListener("click", function() {
    //     cardPaymentDetails.style.display = "none";
    //     upiPaymentDetails.style.display = "block";
    // });

    // Get the form
var form = document.querySelector('form');

// Add an event listener to the form
form.addEventListener('submit', function(event) {
  // Get the phone number input field
  var phoneNumber = document.querySelector('input[name="phone"]');

  // Get the value of the phone number input field
  var phoneNumberValue = phoneNumber.value;

  // Check if the phone number has 10 digits
  if (phoneNumberValue.length !== 10 || isNaN(phoneNumberValue)) {
    // If the phone number does not have 10 digits or is not a number, prevent the form from submitting and display an error message
    event.preventDefault();
    alert('Please enter a valid 10-digit phone number');
  }
});
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var bt = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var spann = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    bt.onclick = function(event) {
      event.preventDefault(); // prevent the default form submission
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spann.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    const checkbox = document.getElementById('sameadr');
const error = document.querySelector('.error');

checkbox.addEventListener('change', () => {
  if (checkbox.checked) {
    error.style.display = 'none';
  } else {
    error.style.display = 'block';
  }
});

//calculate total amount
function calc(n)
{
  var price = document.getElementById('price').value;
  var total=n*price;
  document.getElementById('total').value=total;
}
</script>
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