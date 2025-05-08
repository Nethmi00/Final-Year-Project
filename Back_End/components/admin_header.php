<header class="header">

   <section class="flex">

      <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="dashboard.php">Home</a>
         <a href="messages.php">Appointments</a>
         <a href="CreateVendor.php">Create Vendor</a>
         <a href="admins.php">About Admins</a>
         <?php 
            if(isset($_COOKIE['admin_id'])){
         ?>
         <a href="../components/admin_logout.php" onclick="return confirm('Logout from this website?');" style="color:var(--red);">logout</a>
         <?php }; ?> 
      </nav>

      <div id="menu-btn" class="fas fa-bars-staggered"></div>

   </section>

</header>