



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
<link rel="stylesheet" href="end.css">

</head>
<body>
    <!--header section starts-->

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="home.php" class="logo"><span>z</span>umbara <span> t</span>ravel</a>
    <nav class="navbar">
        <a href="index.php">home</a>
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

        <p>don't have an account? <a href="register.php">Register Now</a></p>
    </form>


</div>




<!--contact section starts-->

<section class="contact" id="contact">

    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="pic/plaen.png" alt="">
        </div>

        <form action="process.php" method="POST">
            <div class="inputbox">
                <input type="text" placeholder="name" name="user" required>
                <input type="email" placeholder="email" name="email" required>
            </div>

            <div class="inputbox">
                <input type="number" placeholder="number" name="phone" required>
                <input type="text" placeholder="subject" name="reseon" required>
            </div>

            <textarea placeholder="message" name="advice" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" name="submit">


        </form>
    </div>
</section>

<!--contact section ends-->


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
            <a href="index.php">home</a>
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
            <a href="https://github.com/dawittamene">GitHub</a>
       
            <a href="https://twitter.com/dawittamene559">twitter</a>
            <a href="https://www.linkedin.com/in/dawit-tamene-531194273/">linledin</a>
        </div>

    </div>
    <h1 class="credit"> created by <span> zumbara web developer group </span> | all rights reserved! </h1>
</section>
<!--footer section ends-->










    <!--coustom js file link-->
    <script src="index.js"></script>
</body>
</html>