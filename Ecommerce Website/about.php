<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOSE US?</h3>
         <p>You chose us because our dedication to customer satisfaction goes beyond just selling products; we prioritize building lasting relationships by offering personalized assistance, fast and reliable shipping, and a hassle-free return policy. Our carefully curated selection of high-quality items reflects our commitment to excellence, ensuring that every purchase you make is not just a transaction, but an investment in quality and satisfaction. Moreover, our transparent pricing and commitment to ethical business practices reinforce our integrity and trustworthiness, making us the preferred choice for discerning shoppers who value reliability and integrity in their online shopping experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Shopping at Clickcart was a delight! The website layout was intuitive, making it easy to find what I needed. The checkout process was smooth, and my order arrived swiftly. Quality products, excellent service - I'll definitely be back for more !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>James Anderson</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>5-star experience shopping at Clickcart ! From start to finish, everything was seamless. Wide selection, fast delivery, and fantastic customer support. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Natalie Campbell</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Highly impressed with my recent purchase from Clickcart. The website was user-friendly, and I received my order faster than expected. Quality products and excellent service - I'll definitely be a returning customer !"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Parker</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Fantastic experience shopping at Clickcart Easy navigation, great product range, and quick delivery. Couldn't ask for more - highly recommended !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Roberts</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Thrilled with my purchases from Clickcart! Easy to use platform, speedy delivery, and top-notch customer service. Will definitely be a repeat customer !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Andrew Taylor</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Couldn't be happier with my shopping experience at Clickcart ! Smooth navigation, fast shipping, and quality products. Highly recommend to anyone looking for a hassle-free online shopping experience !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ashley Morgan</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>