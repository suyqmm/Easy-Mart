<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img_1.jpg" alt="">
         <h3>why choose us?</h3>
         <p>Our service tenet is "customer first, service with heart". Every customer is the most valuable resource of the supermarket. We always adhere to the customer's needs and satisfaction in the first place, with sincere and enthusiastic service to meet each customer's shopping experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img_2.jpeg" alt="">
         <h3>what we provide?</h3>
         <p>Not only do we offer a range and quantity of products that traditional brick and mortar shops can't match, but we also offer a personalised shopping experience and value for money.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic_1.jpg" alt="">
         <p>I think the quality of goods in supermarkets is good, including foodstuffs and daily necessities, and I am satisfied with the variety and quality of goods.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Landen</h3>
      </div>

      <div class="box">
         <img src="images/pic_2.jpg" alt="">
         <p>I think supermarkets have reasonably priced goods that meet the budgetary needs of most customers, have frequent events and are good value for money.
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lewis</h3>
      </div>

      <div class="box">
         <img src="images/pic_3.jpg" alt="">
         <p>Good quality goods and good service attitude. The logistics is fast and double checked to make sure it is genuine before shipping!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carmine</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>