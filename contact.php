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
    <link rel="icon" type="image/svg+xml" href="img/favicon.svg" />
    <link rel="alternate icon" href="img/favicon.ico" />
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="about.css" />
    <title>David Calabrese | Web Developer | For Hire | Contact</title>
  </head>

  <body>
    <header>
 
      <nav class="navbar">
        <ul class="nav-items">
          <li><a href="index.html" class="nav-item">home</a></li>
          <li><a href="resume.html" class="nav-item">resume</a></li>
          <li><a href="#" class="nav-item">projects</a></li>
          <li><a href="about.html" class="nav-item">about</a></li>
          <li><a href="contact.php" class="nav-item">contact</a></li>
        </ul>
        <div class="navbar-toggle" id="navbar-toggle">
          <i class="fas fa-bars"></i>
        </div>
      </nav>

      <div class="center">
        <img class="propic" src="img/profile-pic-circle.png" alt="profile picture" /> 
        <div class="name-container">
          <h1>David Calabrese</h1>
        </div>
        <h2>Software Developer</h2>
      </div>
    </header>

    <main class="container">
        
        <div class="form">

        <?php
          if(isset($_POST['submit'])){
            $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
            $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
            $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

            if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
              $email_error = 'Invalid email';
            }
            if(strlen($message) === 0){
              $message_error = 'Your message should not be empty';
            }
          }
        ?>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <input name="name" type="text" class="feedback-input" placeholder="Name" />   
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <p><?php if(isset($email_error)) echo $email_error; ?></p>
            <textarea name="message" class="feedback-input" placeholder="Comment"></textarea>
            <p><?php if(isset($message_error)) echo $message_error; ?></p>
            <input type="submit" value="SUBMIT" id="submit-contact"/>
          </form>

            <?php
                if(isset($_POST['submit']) && !isset($email_error) && !isset($message_error)){

                  $to = 'dcalabrese414@gmail.com'; // specify your email here

                  // Construct email subject
                  $subject = ' Message from ' . $name;

                  // Construct email body
                  $body_message = 'From: ' . $name . "\r\n\n";
                  $body_message .= 'Email: ' . $email . "\r\n\n";
                  $body_message .= 'Message: ' . $message;

                  // Construct email headers
                  $headers = 'From: ' . $email . "\r\n";
                  $headers .= 'Reply-To: ' . $email . "\r\n";

                  if ($mail_sent = mail($to, $subject, $body_message, $headers)) {
                    echo "<h2>Thank you!</h2>";
                    echo "<p>Message sent</p>";
                  } else {
                    echo "<p>An error occurred. Please try again later</p>";
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


