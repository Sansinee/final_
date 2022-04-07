<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">engineer portfoilo</a>

   <nav class="navbar">
      <a href="home.php">หน้าแรก</a>
      <a href="https://engineer.wu.ac.th/?page_id=15080" target="_blank">หลักสูตร</a>
      <a href="https://engineer.wu.ac.th/?page_id=6767" target="_blank">บุคลากร</a>
      <a href="book.php">ติดต่อ</a>
      <a href="login.php">Sign In</a>
      <a href="">Sign Up</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
           
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> portfolio of major </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>วิศวกรรมโยธา</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>วิศวกรรมไฟฟ้า</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>ปิโตรเคมีและพอลิเมอร์</h3>
      </div>
   </div>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>วิศวกรรมเครื่องกลและหุ่นยนต์</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>วิศวกรรมเคมีและเคมีเภสัชกรรม</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>ติดต่อ</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

























<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>