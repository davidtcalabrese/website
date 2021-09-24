<!DOCTYPE html>
<?php error_reporting(0); ?>
<!--                         ___
                         __/_  `.  .-"'"-.
Author: David Calabrese \_,` | \-'  /   )`-')
Date: 09/05/2021         "") `"` DC  \  ((`"`
                       ___Y  ,    .'7 /|
                     (_,___/...-` (_/_/ -->
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='style.css'>
        <script src='script.js' defer></script>
        <title>Mondrian Resume</title>
    </head>
    <body>
        <div class="container">

            <div class="white-large grid-item">

            <?php
                if(isset($_POST['submit'])){
                    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
                    if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
                    $name_error = 'Invalid name';
                    }
                    if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
                    $subject_error = 'Invalid subject';
                    }
                    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
                    $email_error = 'Invalid email';
                    }
                    if(strlen($message) === 0){
                    $message_error = 'Your message should not be empty';
                    }
                }
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <label for="name"></label><br>
                <input type="text" name="name" class="feedback-input" placeholder="name">
                <p><?php if(isset($name_error)) echo $name_error; ?></p>
                <label for="subject"></label><br>
                <input type="text" name="subject" class="feedback-input" placeholder="subject">
                <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
                <label for="email"></label><br>
                <input type="text" name="email" class="feedback-input" placeholder="email">
                <p><?php if(isset($email_error)) echo $email_error; ?></p>
                <label for="message"></label><br>
                <textarea name="message" class="feedback-input" placeholder="message"></textarea>
                <p><?php if(isset($message_error)) echo $message_error; ?></p>
                <input type="submit" name="submit" value="Submit">
                <?php 
                    if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
                    $to = 'dcalabrese414@gmail.com'; // edit here
                    $body = " Name: $name\n E-mail: $email\n Message:\n $message";
                    if(mail($to, $subject, $body)){
                        echo '<p style="color: green">Message sent</p>';
                    }else{
                        echo '<p>Error occurred, please try again later</p>';
                    }
                    }
                ?>
            </form>
                

            </div>
            
            <div class="red grid-item"></div>            
            <div class="white-small grid-item"></div>
            <div class="blue grid-item"></div>
            <div class="white-medium grid-item"></div>
            <div class="yellow grid-item"></div>

        </div>
    </body>
</html>

