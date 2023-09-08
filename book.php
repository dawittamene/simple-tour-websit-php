



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <!--from awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!--coustom css file link-->
<link rel="stylesheet" href="index.css">

</head>
<body>
    <!--header section starts-->

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>z</span>ubara <span> t</span>ravel</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="book.php">book</a>
        <a href="packages.php">packages</a>
        <a href="services.php">services</a>
        <a href="gallery.php">gallery</a>
        <a href="review.php">review</a>
        <a href="contact.php">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>


















    <!--header section ends-->
   

<!--login form container-->

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="loin now"class="btn">
        <p>don't have and account? <a href="register.php">register now</a></p>
    </form>


</div>






<!--home section start-->


    
    
    
    
    
    
    
    
    
    
    
    
    <!--book section start-->

<section class="book" id="book">
    <h1 class="heading">
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>

    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
</h1>

<div class="row">
    <div class="image">
        <img src="pic/tour_travel.png" alt="">
    </div>
    <form action="bookprocess.php" method="POST">
        <div class="inputbox">
            <h3>where to</h3>
            <input type="text" name="place" placeholder="place name" required>
        </div>

        <div class="inputbox">
            <h3>how many</h3>
            <input type="number" name="quantity" placeholder="number of guests" required>
        </div>

         <div class="inputbox">
            <h3>arrivals</h3>
            <input type="date" name="arrivals" required>
        </div>

        <div class="inputbox">
            <h3>leaving</h3>
            <input type="date" name="Leaving" required>
        </div>
<input type="submit" value="book now" name="submit" class="btn">
    </form>
</div>
</section>



        <!--book section start-->
    
          <!--home section ended-->
    







<!--footer section starts-->


<section class="footer">
    <div class="box-container">


        <div class="box">
            <h3>about us</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error repudiandae nihil nisi ut aspernatur! Quas fuga 
                sequi, quidem eius natus dignissimos cumque. 
                
              
            </p>
        </div>


        <div class="box">
            <h3>branch location</h3>
            <a href="#">assosa</a>
            <a href="#">nekemt</a>
            <a href="#">adama</a>
            <a href="#">ambo</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">home</a>
            <a href="book.php">book</a>
            <a href="packages.php">packages</a>
            <a href="gallery.php">gallery</a>
            <a href="services.php">services</a>
            <a href="review.php">review</a>
            <a href="contact.php">contact</a>
        </div>


        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/dawit.tcool">facebook</a>
            <a href="https://www.instagram.com/dawit_1313/">instagram</a>
       
            <a href="https://twitter.com/dawittamene559">twitter</a>
            <a href="https://www.linkedin.com/in/dawit-tamene-531194273/">linledin</a>
        </div>

    </div>
    <h1 class="credit"> created by <span> zubara web developer gruop </span> | all rights reserved! </h1>
    
</section>
<!--footer section ends-->










    <!--coustom js file link-->
    <script src="index.js"></script>
</body>
</html>