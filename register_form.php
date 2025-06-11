<?php
    // Connection to the database
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Function to check password strength
    function isStrongPassword($password) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password);
    }

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = $_POST['phone_no'];
        $password = $_POST['password']; // Get the password before hashing

        // Check if the phone number is exactly 10 digits
        if (!preg_match('/^\d{10}$/', $phone)) {
            $error[] = "Phone number must be exactly 10 digits!";
        }

        // Check if the password is strong
        if (!isStrongPassword($password)) {
            $error[] = "Password must be at least 8 characters long, contain uppercase and lowercase letters, a number, and a special character!";
        }

        // Check if user already exists
        $select = "SELECT * FROM register_form WHERE email = '$email'";
        $result = mysqli_query($connection, $select);

        if (mysqli_num_rows($result) > 0) {
            $error[] = "User  already exists!";
        } elseif (empty($error)) { // Only insert if there are no errors
            $password = md5($password); // Encrypt the password
            $insert = "INSERT INTO register_form(name, email, password, phone_no) VALUES('$name', '$email', '$password', '$phone')";
            mysqli_query($connection, $insert);
            header('location:login_form.php'); // Redirect to login page after successful registration
            exit(); // Exit to prevent further script execution
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" type="text/css">
</head>
<body>
    <!-- Start Registration Form -->
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <?php
                // Display error messages
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    }
                }
            ?>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="text" name="phone_no" required placeholder="Enter your phone no.">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login now</a></p>
        </form>
    </div>
    <!-- End Registration Form -->
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script type="text/javascript" src="js/script.js?v=<?php echo time();?>"></script>
</body>
</html>