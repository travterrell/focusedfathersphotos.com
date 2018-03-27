<?php

$feedback = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "focusedfathers2015@gmail.com, travterrell@gmail.com";
  $from = $_POST["email_address"];
  $subject = "Focused Fathers Inquiry";
  $name = $_POST["name"];
  $message = "From: {$name}\n\n".$_POST["message"];
  $headers = "From: {$from}";
  if (mail($to,$subject,$message,$headers)) {
    $feedback = "<span class='success'>SUCCESS!</span> Thanks for the e-mail!";
  } else {
    $feedback = "<span class='error'>ERROR.</span> Your e-mail didn't send. Please try again.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Focused Fathers Photography</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="assets/focused-fathers-nav-logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-2 nav">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="assets/focused-fathers-nav-logo.png" id="navlogo">
          <div class="collapse navbar-collapse" id="nav-menu">
            <ul class="nav navbar-nav">
              <li><a href="index.html">HOME<div><img src="assets/navbar/home.png" class="goldhover"></div></a></li>
              <li><a href="about.html">ABOUT<div><img src="assets/navbar/about.png" class="goldhover"></div></a></li>
              <li id="portfolio"><a href="portfolio.html">PORTFOLIO<div><img src="assets/navbar/portfolio.png" class="goldhover"></div></a></li>
              <li><a href="pricing.html">PRICING<div><img src="assets/navbar/pricing.png" class="goldhover"></div></a></li>
              <li><a href="contact.php">CONTACT<div><img src="assets/navbar/contact.png" class="goldhover"></div></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-10 content">
          <img src="assets/focused-fathers-top-bar.png">
          <h1>CONTACT</h1>
          <p style="text-align:center">Drop us a line if you would like to contact us about our services!</p>
          <p id="feedback"><?php echo $feedback ?></p>
          <div id="contact_form">
          <form action="" method="POST" enctype="multipart/form-data">
            Name:<br>
            <input type="text" name="name"><br>
            E-mail Address:<br>
            <input type="text" name="email_address"><br>
            Message:<br>
            <textarea id="message" name="message" maxlength="320"></textarea>
            <br>
            <div id="form_buttons">
              <input class="button" name="send" type="submit" value="Send">
              <input class="button" type="reset" value="Reset">
            </div>
          </form>
        </div>
          <img src="assets/focused-fathers-bottom-bar.png">
          <p class="footer"><span>©</span> <?php echo date("Y");?> Focused Fathers Photography</p>
          <p class="footer">Design by <a href="http://www.travterrell.com" target="_blank"><img class="footer_logo" src="assets/travlogo.png" alt="Design by Travis Terrell - www.travterrell.com"></p>
        </div>
      </div>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="responsiveslides.js"></script>
      <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
      </script>

    </div>
  </body>

</html>
