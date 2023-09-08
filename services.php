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
    <a href="home.php" class="logo"><span>z</span>umbara <span> t</span>ravel</a>
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





<!--services section start-->


<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>


    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>



        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>


        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>


        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>


        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>





    </div>
</section>




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
    <h1 class="credit"> created by <span> zumbara web developer group </span> | all rights reserved! </h1>
</section>
<!--footer section ends-->






<!--services section ends-->
    <script src="index.js"></script>
</body>
</html>