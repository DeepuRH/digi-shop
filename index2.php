<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deepu Computer Center 1</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header -->
<header class="header">

    <a href="#" class="logo"> <ion-icon name="logo-facebook"></ion-icon> Deepu Computer Center </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php">features</a>
        <a href="index.php">products</a>
        <a href="index.php">categories</a>
        <a href="index.php">review</a>
        <!-- <a href="#blogs">blogs</a> -->
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>


    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>
<br><br><br><br>
<!-- header end -->
<section class="features" id="features">

    <h1 class="heading"> our <span>Services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/photocopy.jfif" alt="">
            <h3>Photocopy</h3>
            <p>Send the pdf, images etc. through the links given below</p>
            <a href="https://www.whatsapp.com/" class="btn">Whatsapp</a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn">Gmail</a>
        </div>


    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Deepu Computer Center </h3>
            <p>1st mian Swamy Vivekananda Bavavane near BIET Davangere</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91-7619449101 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +91-8971311839 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> deepurh24@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Karnataka, india - 577004 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <!-- <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a> -->
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span>d.designers </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
