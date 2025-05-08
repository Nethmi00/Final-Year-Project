<!DOCTYPE html>
<html lang = "en">
<head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 

    <!-- Custom css file Link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

<h1 class="heading"> Our Portfolio </h1>

    <div class="portfolio-container">

        <a href="images/WeddingCeremony.php" class="box">
            <div class="image">
                <img src = "images/Wedding01.jpg" alt="">
            </div>
            <h3>Wedding Ceremony</h3>
        </a>

        <a href="images/Wedding02.jpg" class="box">
            <div class="image">
                <img src = "images/Wedding02.jpg" alt="">
            </div>
            <h3>Engagements</h3>
        </a>

        <a href="images/Wedding03.jpg" class="box">
            <div class="image">
                <img src = "images/Wedding03.jpg" alt="">
            </div>
            <h3>Birthday Parties</h3>
        </a>

        <a href="images/Wedding04.jpg" class="box">
            <div class="image">
                <img src = "images/Wedding04.jpg" alt="">
            </div>
            <h3>Anniversary Cekebrations</h3>
        </a>

        <a href="images/Wedding05.jpg" class="box">
            <div class="image">
                <img src = "images/Wedding05.jpg" alt="">
            </div>
            <h3>Surprise Parties</h3>
        </a>

        <a href="images/Wedding06.jpg" class="box">
            <div class="image">
                <img src = "images/Wedding06.jpg" alt="">
            </div>
            <h3>Social Events</h3>
        </a>

    </div>

</section>

<?php @include 'Footer.php'; ?>

</div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
 <script src="js/script.js"></script>

<script>

    lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>