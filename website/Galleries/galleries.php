<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/xml; charset=utf-8" />
  <!--ensures proper rendering and touch zooming on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>galleries</title>
  <!--import google font-->
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <!--import style sheet-->
  <link rel="stylesheet" type = "text/css"
  href=galleriesstyle.css>
  <!--link javascript-->

<head>

<body>
  <!--Header-->
<?php
  include_once("../navbarTemplate.php");
?>

  <div id="gals-title">
    <h1>Galleries</h1>
  </div>
  <div class="border"></div>
  <div id="gal-container">
    <div class="gallery">
      <div class="gal-title">
        <h2>Annie's Art Show</h2>
      </div>
      <div class="gal-img">
        <img src="feet_t.jpg" alt="" />
      </div>
      <div class="gal-desc">
        <p>
          Annie's art show description
        </p>
      </div>
    </div>
    <div class="gallery">
      <div class="gal-title">
        <h2>Pipe Dreams</h2>
      </div>
      <div class="gal-img">
        <img src="resin_t.jpg" alt="" />
      </div>
      <div class="gal-desc">
        <p>
          Pipe Dreams description
        </p>
      </div>
    </div>
    <div class="gallery">
      <div class="gal-title">
        <h2>Bedlam Cups</h2>
      </div>
      <div class="gal-img">
        <img src="lunar_t.jpg" alt="Bedlam Cups" />
      </div>
      <div class="gal-desc">
        <p>
          Bedlam Cups show description
        </p>
      </div>
    </div>
    <div class="gallery">
      <div class="gal-title">
        <h2>Faces</h2>
      </div>
      <div class="gal-img">
        <img src="faces_t.jpg" alt="faces" />
      </div>
      <div class="gal-desc">
        <p>
          Faces description
        </p>
      </div>
    </div>
  </div>

  <div class="border"></div>
  <div id="footer">
    <h3>Joseph Edgerton Krause © 2016</h3>
  </div>
</body>
