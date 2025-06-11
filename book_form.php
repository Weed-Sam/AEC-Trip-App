<?php
    session_start();
    $connection = mysqli_connect('localhost' , 'root' , '' , 'book_db');

    if(isset($_POST['send'])) 
    {
        $booking_id=$_SESSION['booking_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $price = $_POST['price'];

        $request = " insert into book_form(id,name,email,phone,address,location,guests,arrivals,price) values('$booking_id', '$name' , '$email' , '$phone' , '$address' , '$location'  , '$guests' , '$arrivals' , '$price')";


        mysqli_query($connection , $request);

        $sql="update booking_id set bid=bid+1";
        mysqli_query($connection , $sql);
        //get the last id
        // $sql="select id from book_form order by id desc limit 1";
        // $result=mysqli_query($connection,$sql);
        // $row=mysqli_fetch_array($result);
        // $id=$row['id'];
           $_SESSION['id']=$booking_id;

        header('location:book.php?result=success');
    }
    else
    {
        echo "something went wrong try again";
    }
?>