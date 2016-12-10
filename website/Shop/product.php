<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<script src="https://use.fontawesome.com/041a8a6fad.js"></script>
<body>

<?php
include_once("../navbarTemplate.php");
include("storescripts/connect_to_mysql.php");
if(isset($_GET['id'])){
  // $id = preg_replace('#{^0-9]#i',$_GET['id']);
  $id = $_GET['id'];
  $query = "SELECT * FROM productlist WHERE product_id='$id' LIMIT 1";
  $response = @mysqli_query($dbc, $query);
  while ($row = mysqli_fetch_array($response)){
    $name = $row["product_name"];
    $id = $row["product_id"];
    $price = $row["product_price"];
    $img = $row["product_image"];
    $description = $row["product_details"];
    $inStock = $row["product_inventory"];
  }
}else{
  echo "Data to rtender this page is missing";
}
?>

<div id='main-content'>
  <?php echo $name ?>
</div>
  <div id="details">
    HELOOO
  </div>
</div>

</body>

<head>
  <meta http-equiv="content-type" content="text/xml; charset=utf-8" />
  <!--ensures proper rendering and touch zooming on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $name ?></title>
  <!--import google font-->
  <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  <!--import style sheet-->
  <link rel="stylesheet" type = "text/css"
  href="style/productstyle.css">
  <!--link javascript-->

<head>
