<!DOCTYPE html>
<html lang = "en">
<head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>

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

<section class="about">

    <img src="images/couple.jpg" alt="">

    <h3>About Us </h3>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusamus ipsa vel quidem enim accusantium, dignissimos velit commodi sunt minus reprehenderit repellat quas culpa temporibus ea ullam veniam laudantium ipsum.</p>

    <a href="contact.php" class="btn">Contact Us</a>

</section>

<section class="team">

    <h1 class="heading">Our team</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Him.png" alt="">
            <h3>Shehan M Arthur</h3>
            <p>Founder/CEO/Wedding Planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-tiktok"></a>
                <a href="#" class="fas fa-envelope"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/My.jpg" alt="">
            <h3>Nethmi P Amarasingha</h3>
            <p>Wedding Planner/Wedding Coordinater</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-tiktok"></a>
                <a href="#" class="fas fa-envelope"></a>
            </div>
        </div>

    </div>

</section>

<?php @include 'Footer.php'; ?>

</div>















<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
 <script src="js/script.js"></script>

</body>
</html>