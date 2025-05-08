<?php
include '../components/connect.php';

session_start();

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
   header('location:login.php');
   exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $service_type = $_POST['service_type'];
    $contact = $_POST['contact_number'];
    $location = $_POST['location'];

    // Handle image upload
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $unique_image_name = uniqid('vendor_', true) . '.' . $image_extension; // Generate unique name
    $image_folder = '../admin/uploaded_images/' . $unique_image_name;

    // Check if email already exists
    $check = $conn->prepare("SELECT * FROM vendor WHERE email = ?");
    $check->execute([$email]);

    if ($check->rowCount() > 0) {
        echo "<script>
            alert('Vendor with this email already exists.');
            window.location.href='CreateVendor.php';
        </script>";
        exit();
    }

    // Insert into vendor table
    $insert = $conn->prepare("INSERT INTO vendor (name, email, password, service_type, contact_number, image, location)
                              VALUES (?, ?, ?, ?, ?, ?, ?)");
    $insert->execute([$name, $email, $password, $service_type, $contact, $unique_image_name, $location]);

    // Move uploaded file
    move_uploaded_file($image_tmp, $image_folder);

    echo "<script>
        alert('Vendor created successfully.');
        window.location.href='CreateVendor.php';
    </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Create Vendor</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">

   <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 500px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .input {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<section class="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
        <h3>Create New Vendor Account!</h3>
        <input type="text" name="name" placeholder="Enter Vendor Name" required class="input">
        <input type="email" name="email" placeholder="Enter Vendor Email" required class="input">
        <input type="password" name="password" placeholder="Enter Password" required class="input">
        
        <select name="service_type" required class="input">
            <option value="">Select Service Type</option>
            <option value="Wedding Hotel">Wedding Hotel</option>
            <option value="Photographer">Photographer</option>
            <option value="Videographer">Videographer</option>
            <option value="Beautician">Beautician</option>
            <option value="DJ Music">DJ Music</option>
            <option value="Decoration">Decoration</option>
            <option value="Traditional Event">Traditional Event</option>
            <option value="Photo Location">Photo Location</option>
            <option value="Wedding Cakes">Wedding Cakes</option>
            <option value="Wedding Cars">Wedding Cars</option>
            <option value="Invitation cards & cake boxes">Invitation cards & cake boxes</option>
        </select>

        <input type="text" name="contact_number" placeholder="Enter Contact Number" required class="input">
        <input type="file" name="image" accept="image/*" required class="input">
        <input type="text" name="location" placeholder="Enter Location" required class="input">
        <button type="submit" class="btn">Create Vendor</button>
    </form>
</section>

</body>
</html>

