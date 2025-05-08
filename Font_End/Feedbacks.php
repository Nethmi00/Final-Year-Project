<!DOCTYPE html>
<html lang = "en">
<head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Budget Planner</title>

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

<section class="reviews">

    <h1 class="heading">Happy Clients</h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper slide slide">
                <img src="Review01.jpg" alt="">
                <h3>Udeshika</h3>
                <p>byefsdghnfigas7fyuwsjfywef</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper slide slide">
                <img src="Review01.jpg" alt="">
                <h3>Udeshika</h3>
                <p>byefsdghnfigas7fyuwsjfywef</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper slide slide">
                <img src="Review01.jpg" alt="">
                <h3>Udeshika</h3>
                <p>byefsdghnfigas7fyuwsjfywef</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper slide slide">
                <img src="Review01.jpg" alt="">
                <h3>Udeshika</h3>
                <p>byefsdghnfigas7fyuwsjfywef</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper slide slide">
                <img src="Review01.jpg" alt="">
                <h3>Udeshika</h3>
                <p>byefsdghnfigas7fyuwsjfywef</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

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