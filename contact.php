<!DOCTYPE html>
<!--                         ___
                         __/_  `.  .-"'"-.
Author: David Calabrese \_,` | \-'  /   )`-')
Date: 08/28/2021         "") `"` DC  \  ((`"`
                        ___Y  ,    .'7 /|
                      (_,___/...-` (_/_/ -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/3da1a747b2.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />
    <link rel="alternate icon" href="img/favicon.ico" />
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="contact.css" />
    <title>David Calabrese | Web Developer | For Hire</title>
  </head>

  <body>
    <header>
 
      <nav class="navbar">
        <ul class="nav-items">
          <li><a href="index.html" class="nav-item">home</a></li>
          <li><a href="resume.html" class="nav-item">resume</a></li>
          <li><a href="projects.html" class="nav-item">projects</a></li>
          <li><a href="about.html" class="nav-item">about</a></li>
          <li><a href="contact.php" class="nav-item">contact</a></li>
        </ul>
        <div class="navbar-toggle" id="navbar-toggle">
          <i class="fas fa-bars"></i>
        </div>
      </nav>

      <div class="center">
        <img class="propic" src="img/profile-pic-circle.png" alt="" />
        <div class="name-container">
          <h1>David Calabrese</h1>
        </div>
        <h2>Software Developer</h2>
      </div>
    </header>

    <main class="container">
        
        <div class="form">

        <?php
            if (isset($_POST["submit"])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $from = $email; 

                $to = 'dcalabrese414@gmail.com'; 
                
                $subject = "Message from ".$name." ";
                
                $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        
                // Check if name has been entered
                if (!$_POST['name']) {
                    $errName = 'Please enter your name';
                }
                
                // Check if email has been entered and is valid
                if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $errEmail = 'Please enter a valid email address';
                }
                
                //Check if message has been entered
                if (!$_POST['message']) {
                    $errMessage = 'Please enter your message';
                }
        
                // If there are no errors, send the email
                if (!$errName && !$errEmail && !$errMessage) {
                    if (mail ($to, $subject, $body, $from)) {
                        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
                    } else {
                        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
                    }
                }
    
        ?>
        </div>

    </main>

    <footer>
      <div class="social">
        <a href="https://www.linkedin.com/in/david-calabrese-6828731a3/">
          <i class="fab fa-linkedin fa-2x"></i>
        </a>
        <a href="https://github.com/davidtcalabrese" rel="noreferrer noopener">
          <i class="fab fa-github fa-2x"></i>
        </a>
        <a href="https://www.facebook.com/david.calabrese.334/">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com/cuentodenada1">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </div>
    </footer>
  </body>
</html>




