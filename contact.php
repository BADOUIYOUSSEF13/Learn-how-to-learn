<?php
   $d="mysql:host=localhost;dbname=messages;";
   $user="root";
   $password="";
   $conn=new PDO($d,$user,$password);

   if(!$conn){
      die("erreur :".mysqli_connect_error());
   }

   else{
      echo "";

    if(isset($_POST["message"])){
    $name =$_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
  $sql =$conn->prepare("INSERT INTO message(name,email,subject,message) values ('$name','$email','$subject','$message')");
  $sql->execute();

}
}
    
    ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Education Website Design Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<!-- -------------------------start header-------------------------- -->
<header>

<a href="index.html" class="logo"><i class="fas fa-graduation-cap"></i>LEARN</a>

<nav class="navbar">
    <ul>
        <li><a class="menu-toggle">menu</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a href="aboute.html">about</a></li>
        <li><a href="regester_form.php"><i class="fas fa-user"></i></a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>
<!-- -------------------------------end header----------------------------------- -->
<!-- -------------------------------start header two----------------------------------- -->
<div class="header">
    <nav class="navbar-2">
        <ul>
            <li><a href="cours-php.html">Photochop</a></li>
            <li><a href="aboute.html">Development</a></li>
            <li><a href="aboute.html">Marketing</a></li>
            <li><a href="aboute.html">Sport</a></li>
            <li><a href="aboute.html">Design</a></li>
            <li><a href="aboute.html">Office</a></li>
            <li><a href="aboute.html">Busness</a></li>
            <li><a href="aboute.html">Finance</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="regester_form.php">signin</a></li>
            <li><a href="aboute.html">about</a></li>
        </ul>
    </nav>
</div>

<!-- -------------------------------end header----------------------------------- -->
<!-- -------------------------------start header two----------------------------------- -->
<div class="header">
    <nav class="navbar-2">
        <ul>
            <li><a href="cours-php.html">Photochop</a></li>
            <li><a href="aboute.html">Development</a></li>
            <li><a href="aboute.html">Marketing</a></li>
            <li><a href="aboute.html">Sport</a></li>
            <li><a href="aboute.html">Design</a></li>
            <li><a href="aboute.html">Office</a></li>
            <li><a href="aboute.html">Busness</a></li>
            <li><a href="aboute.html">Finance</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="regester_form.php">signin</a></li>
            <li><a href="aboute.html">about</a></li>
        </ul>
    </nav>
</div>

<!-- -------------------------------end header two----------------------------------- -->

<!-- -----------------------contact-------------- -->
<section class="contact" id="contact">

<div class="row">


    <div class="form-container">
        <form action="" method="post">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="text" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea placeholder="Message" name="message"></textarea>
        <input type="submit" value="Send message">
        </form>
    </div>

</div>

<!-- ------------------footer---------------------- -->


<section class="footer">
  
  <footer>
    <div class="logo"><a href="index.html"><i class="fas fa-graduation-cap"></i>learn</a></div>
    <hr> 
    <ul>
        <li><a href="index.html">Blog</a></li>
        <li><a href="aboute.html">Help</a></li>
        <li><a href="">Affiliat</a></li>
        <li><a href="">investors</a></li>
    </ul>
    <ul>
        <li><a href="">Terms</a></li>
        <li><a href="">Privacy</a></li>
        <li><a href="">Sitemap</a></li>
        <li><a href="">Accessibility statement</a></li>
    </ul>
    <ul>
        <li><a href="courses.html">Teach on learn</a></li>
        <li><a href="courses.html">learn</a></li>
        <li><a href="aboute.html">About us</a></li>
        <li><a href="">Contact us</a></li>
    </ul>
    <hr>
    <div class="icons">
        <a href="www.facebook.com" class="fab fa-facebook-f"></a>
        <a href="www.twitter.com" class="fab fa-twitter"></a>
        <a href="www.instagram.com" class="fab fa-instagram"></a>
        <a href="www.github.com" class="fab fa-github"></a>
    </div>
</footer>

</section>




<script src="script/jquery-3.6.0.min.js"></script>
<script src="script/script.js"></script>

    
</body>
</html>