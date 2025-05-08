<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Music</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php 
@include 'header.php'; 
include '../Back_End/components/connect.php';

// Fetch DJ Music
$query = $conn->prepare("SELECT * FROM vendor WHERE service_type = 'DJ Music'");
$query->execute();
$vendors = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="DJ Music">
    <h1 class="heading">DJ Music</h1>

    <div class="box-container">
        <?php if (count($vendors) > 0): ?>
            <?php foreach ($vendors as $vendor): ?>
                <div class="box">
                    <img src="../Back_End/admin/uploaded_images/<?php echo htmlspecialchars($vendor['image']); ?>" alt="Vendor Image">
                    <h3><?php echo htmlspecialchars($vendor['name']); ?></h3>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($vendor['location']); ?></p>
                    <p><strong>Contact:</strong> <?php echo htmlspecialchars($vendor['contact_number']); ?></p>
                    <a href="contact_vendor.php?vendor_id=<?php echo $vendor['id']; ?>" class="btn">Select</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align: center;">No DJ Music found.</p>
        <?php endif; ?>
    </div>
</section>

<?php @include 'Footer.php'; ?>

</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>
