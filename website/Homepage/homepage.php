<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/xml; charset=utf-8" />
  <!--ensures proper rendering and touch zooming on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>homepage</title>
  <!--import google font-->
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <!--import style sheet-->
  <link rel="stylesheet" type = "text/css"
  href=homepage.css>
  <!--link javascript-->

<head>

<body>
<?php
  include_once("../navbarTemplate.php")
?>
    <!--Slideshow-->
    <div id="slideshow">
        <!-- Conatainers for dropdown menu in mobile mode -->
        <div id="menu-container">
          <div class="line"id="line1"></div>
          <div class="line"id="line2"></div>
          <div class="line"id="line3"></div>
          <div class="line"id="line4"></div>
          <div class="line"id="line5"></div>
      </div>
    </div>

    <!--Ticker-->
    <div class="ticker">
      <button class="circle" id="c0"></button>
      <button class="circle" id="c1"></button>
      <button class="circle" id="c2"></button>
      <button class="circle" id ="c3"></button>
      <button class="circle" id ="c4"></button>
      <button class="circle" id ="c5"></button>
      <button class="circle" id ="c6"></button>
    </div>


    </div>
</div>
</body>
<script src="https://use.fontawesome.com/041a8a6fad.js"></script>
<script src= "../jQuery.js"></script>
<!--Needed for jquery functions -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src= "homepage.js"></script>
