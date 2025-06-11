<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,"book_db");
?>
<?php
    $sql="select * from book_form";
    $res=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .carousel-item{
            min-height: 620px;
            width: 200px;
        }
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
        
        .bg-success {
            background-color: #dff0d8; /* green background color */
        }
        .bg-danger {
            background-color: #f2dede; /* red background color */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>location</th>
            <th>guests</th>
            <th>Travel date</th>
            <th>price</th>
            <th>Disapproved</th>
            <th>Aapproved</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($arr=mysqli_fetch_array($res))
        {
    ?>
            <tr data-row-id="<?php echo $arr['id']; ?>"> <!-- add data-row-id attribute -->
                <td><?php echo $arr['id'];?></td>
                <td><?php echo $arr['name'];?></td>
                <td><?php echo $arr['email'];?></td>
                <td><?php echo $arr['phone'];?></td>
                <td><?php echo $arr['address'];?></td>
                <td><?php echo $arr['location'];?></td>
                <td><?php echo $arr['guests'];?></td>
                <td><?php echo $arr['arrivals'];?></td>
                <td><?php echo $arr['price'];?></td>
                <td><button class="btn-close" data-row-id="<?php echo $arr['id']; ?>"><i class="fa fa-close"></i></button></td>
                <td><button class="btn-check" data-row-id="<?php echo $arr['id']; ?>"><i class="fa fa-check"></i></button></td>
            </tr>
    <?php
        }
    ?>
</tbody>
</table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const checkButtons = document.querySelectorAll(".btn-check");
        const closeButtons = document.querySelectorAll(".btn-close");

        checkButtons.forEach(button => {
            button.addEventListener("click", function() {
                const rowId = this.getAttribute("data-row-id");
                const row = document.querySelector(`tr[data-row-id="${rowId}"]`); // get the entire table row
                row.classList.add("bg-success"); // add green background color
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener("click", function() {
                const rowId = this.getAttribute("data-row-id");
                const row = document.querySelector(`tr[data-row-id="${rowId}"]`); // get the entire table row
                row.classList.add("bg-danger"); // add red background color
            });
        });
    });
</script>

</body>
</html>
