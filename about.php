<?php  
// Prevent caching on restricted page
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>We are at the forefront of technological advancements in the house management field. Our cutting-edge platform is designed to streamline processes, enhance efficiency, and provide you with a seamless user experience.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Find the perfect home that matches your needs and preferences with few clicks.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Experience the convenience of contacting trusted real estate agents in one place.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Experience the true joy of homeownership with our house management system.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

        <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Walter Barclay</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Effortlessly managing my home has never been easier! 
            This house management system has truly transformed 
            the way I handle tasks and organize my daily life 
            the way I handle tasks and organize my daily.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>Grace Jiana</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I can't imagine my life without this incredible house management system. 
            It simplifies everything from scheduling maintenance tasks to tracking expenses.
            the way I handle tasks and organize</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Clive James</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>This house management system has brought peace of mind to my household. 
            From security monitoring to automating routines, it's like having a personal assistant that never sleeps.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>Addah Amalia</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I'm blown away by the efficiency and convenience of this house management system. 
            It streamlines communication with service providers.
            the way I handle tasks and organize my daily life</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Theo Walcott</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I love how customizable this house management system is. It adapts to my unique needs and preferences, 
            allowing me to tailor it to my home and lifestyle effortlessly.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Jarnel Frizel</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Thanks to this house management system, I feel in control of my home like never before. 
            It keeps me informed, organized, and on top of all the important tasks.
            the way I handle tasks and organize my daily</p>
      </div>
      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Winnie Akinyi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Thanks to this house management system, I feel in control of my home like never before. 
            It keeps me informed, organized, and on top of all the important tasks.
            the way I handle tasks and organize my daily</p>
      </div>
      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Charles Jeckton</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I love how customizable this house management system is. It adapts to my unique needs and preferences, 
            allowing me to tailor it to my home and lifestyle effortlessly.</p>
      </div>
      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>Grace Mapengo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half -alt"></i>
               </div>
            </div>
         </div>
         <p>I love how customizable this house management system is. It adapts to my unique needs and preferences, 
            allowing me to tailor it to my home and lifestyle effortlessly.</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>