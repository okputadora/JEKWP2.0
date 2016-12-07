<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/xml; charset=utf-8" />
  <!--ensures proper rendering and touch zooming on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact</title>
  <!--import google font-->
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <!--import style sheet-->
  <link rel="stylesheet" type = "text/css"
  href=contactstyle.css>
</head>

<script src="https://use.fontawesome.com/041a8a6fad.js"></script>
<script src= "../jQuery.js"></script>
<!--Needed for jquery functions -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="contact.js"></script>

  <body>
    <!-- NAV MENU -->
<?php include_once("../navbarTemplate.php") ?>

    <!-- Side navigation menu -->
    <div class="side-nav">
      <div class="side-nav-container">
        <button class="msg"><i class="fa fa-comment" aria-hidden="true"></i></button>
        <button class="mail"><i class="fa fa-envelope" aria-hidden="true"></i></button>
        <button class="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i></button>
        <Button class="dev"><i class="fa fa-laptop" aria-hidden="true"></i></Button>
      </div>
    </div>

    <!-- Generic contact form -->
    <div class="row" id="first">
      <div class="contact-box" id="contact-form">
        <div class="contact-header">
          <h2>Contact</h2>
        </div>
          <form>
            <label>Name</label>
            <input name="name" />
            <label>Email</label>
            <input name="email" type="email" />
            <label>Message</label>
            <textarea name="message" placeholder="Gimmie Feedback..."></textarea>
            <input id="submit" name="submit" type="submit" value="submit" />
          </form>
      </div>
    </div>

    <!-- Mail -->
    <div class="row" id="second">
      <div class="contact-box" id="mailing">
          <h3>Write us a letter</h3>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p>Address line 1</p>
          <p>Address line 2</p>
          <p>Address line 3</p>
      </div>
    </div>

    <!-- Facebook -->
    <div class="row" id="third">
      <div class="contact-box" id="facebook">
        <h3>Hit me up on</h3>
        <a href="https://www.facebook.com/joseph.krause.986">
        <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      </div>
    </div>


      <!-- Developer -->
      <div class="row" id="fourth">
        <div class="contact-box" id="developer">
          <h3>Conact this site's developer</h3>
          <div id="developer-contact">
            <a href="https://github.com/okputadora"><i class="fa fa-github-square" aria-hidden="true"></i></a>
            <a href="mailto:okputadora@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/michael.mcveigh.773">
            <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </body>
