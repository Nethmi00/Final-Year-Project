<? php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `contact us_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES 
    ('$name','$email','$number','$plan','$address','$message')";

    mysqli_query($conn, $insert);

    header('location:contact us.php');

}

?>



<!DOCTYPE html>
<html lang = "en">
<head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 

    <!-- Custom css file Link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">

    <h1 class="heading">Contact Us</h1>

        <form action="" method ="post">

            <div class="flex">

                <div class="inputBox">
                    <span>Your Name: </span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>Your Email: </span>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>Your Phone Number: </span>
                    <input type="number" placeholder="Enter your phone number" name="number" required>
                </div>

                <div class="inputBox">
                    <span>Choose Plan: </span>
                    <select name="plan">
                        <option value="basic">Basic plan</option>
                        <option value="basic">Basic plan</option>
                        <option value="basic">Basic plan</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>Your Address: </span>
                    <textarea name="address" placeholder="Enter your address" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>Your message: </span>
                    <textarea name="message" placeholder="Enter your message" required cols="30" rows="10"></textarea>
                </div>

            </div>

            <input type="submit" value="Send message" name="send" class="btn">
        </form>
</section>

<?php @include 'Footer.php'; ?>

</div>
















<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
 <script src="js/script.js"></script>

</body>
</html>