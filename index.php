<?php
  include("includes/init.php");
  $title = "Home";
  $nav_home = "current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <title>Home</title>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <!-- This image is from https://www.facebook.com/PuppyBowl/photos/rpp.269661031391/10156875916741392/ -->
  <img src="/images/pbxvwelcome.png" alt="A banner image advertising Puppy Bowl XV">
  <p>Image from the <cite><a href="https://www.facebook.com/PuppyBowl/photos/rpp.269661031391/10156875916741392/">Puppy Bowl Facebook Page.</a></cite></p>
  <h1 id="streamlink"><a href="https://www.animalplanet.com/tv-shows/puppy-bowl/full-episodes/puppy-bowl-xv-winner-takes-all">Stream Puppy Bowl XV Here!</a></h1>
  <?php include("includes/footer.php"); ?>
</body>
</html>
