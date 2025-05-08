<?php

include '../components/connect.php';

if(isset($_COOKIE['id'])){
    $id = $_COOKIE['id'];
 }else{
    $id = '';
 }
 
 if(isset($_POST['submit'])){
 
     $id = create_unique_id(); // <-- This is your unique ID
     $name = $_POST['name'];
     $name = filter_var($name, FILTER_SANITIZE_STRING);
     $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
     $pass = filter_var($pass, FILTER_SANITIZE_STRING);
     $c_pass = $_POST['c_pass'];
     $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);
     $email = $_POST['email'];
     $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Added sanitization
     $wedding_date = $_POST['wedding_date'];
     $wedding_date = filter_var($wedding_date, FILTER_SANITIZE_STRING); // Added sanitization

     if(!empty($name) && !empty($pass) && !empty($c_pass)){
 
         $verify_name = $conn->prepare("SELECT * FROM `couple` WHERE name = ?");
         $verify_name->execute([$name]);
 
         if($verify_name->rowCount() > 0){
             $warning_msg[] = 'Username already taken!';
         } else {
             $verify_pass = password_verify($c_pass, $pass);
 
             if(!$verify_pass){
                 $warning_msg[] = 'Confirm password not matched!';
             } else {
                 // Fixed column count in the INSERT statement
                 $insert_couple = $conn->prepare("INSERT INTO `couple`(id, name, email, password, wedding_date) VALUES(?, ?, ?, ?, ?)");
                 $insert_couple->execute([$id, $name, $email, $pass, $wedding_date]); // Corrected variable `$pass`
                 
                   // Check if email already exists
                        $check = $conn->prepare("SELECT * FROM couple WHERE email = ?");
                        $check->execute([$email]);

                        if ($check->rowCount() > 0) {
                            echo "<script>
                                alert('couple with this email already exists.');
                                window.location.href='Register.php';
                            </script>";
                            exit();
    
 
                 if($insert_couple){
                     $select_name = $conn->prepare("SELECT * FROM `couple` WHERE name = ?");
                     $select_name->execute([$name]);
                     $fetch = $select_name->fetch(PDO::FETCH_ASSOC);
                    setcookie('id', $fetch['id'], time() + 60 * 60 * 24 * 30, '/');
                 }
             }
         }
    }
        }else{
            $warning_msg[] = 'Please fill out fields!';
        }
      
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>


<!-- account section starts  -->

<section class="form-container">

   <form action="" method="post">
      <h3>create new account!</h3>
      <input type="text" required name="name" maxlength="20" placeholder="Enter your name" class="input" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="email" name="email" maxlength="80" placeholder="Enter your email address" class="input" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required name="pass" maxlength="20" placeholder="Enter your password" class="input" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" required name="c_pass" maxlength="20" placeholder="Confirm your password" class="input" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="date" name="wedding_date" class="input" placeholder="Enter your wedding date">

      <input type="submit" value="reigster now" name="submit" class="btn">
   </form>

</section>


<!-- account section ends -->













<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

<?php include '../components/alert.php'; ?>
   
</body>
</html>