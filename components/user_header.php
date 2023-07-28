<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><img src="images/restatelg.png" alt="logo" style="height:50px;"></a>

        
        <div class="mymenu">
            <li><a href="home.php">Home</a></i></li>
            <li><a href="about.php">About Us</a></i></li>
            <li><a href="contact.php">Contact Us</a></i></li>
            <li><a href="contact.php#faq">FAQ</a></i></li>
         </div>

         <ul>
    <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
    <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
        <ul>
            <?php if ($user_id != '') { ?>
                <li><a href="update.php"><i class="fas fa-user-edit"></i> Profile</a></li>
                <li><a href="components/user_logout.php" onclick="return confirm('Do you want to logout from this website?');"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <?php } else { ?>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="register.php"><i class="fas fa-user"></i> Register</a></li>
            <?php } ?>
        </ul>
    </li>
</ul>

      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">My listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="post_property.php">Post Property</a></li>
                     <li><a href="my_listings.php">My Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">Options<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">Filter Search</a></li>
                     <li><a href="listings.php">All Listings</a></li>
                  </ul>
               </li>
               <li><a href="post_property.php">Post Property<i class="fas fa-paper-plane"></i></a></li>
               
               
      
         </div>


      </section>
   </nav>

</header>

<!-- header section ends -->