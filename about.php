<?php
    include("includes/init.php");
    $title = "About";
    $nav_about = "current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <title>About</title>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <div id=about-holder>
    <div id="about-content">
      <h1>About Puppy Bowl XV</h1>
      <!-- This blurb was written by Animal Planet to go on the Puppy Bowl's about page for their website. -->
      <p>Ready, Set, Pup! Television’s fuzziest sports competition and original adoption extravaganza is back and celebrating its 15th year, the biggest to date, as the world’s cutest sporting event returns to Animal Planet for PUPPY BOWL XV on Sunday, February 3 at 3PM ET/12PM PT. In years past, 100% of the puppies and kittens that have participated in PUPPY BOWL have been adopted to loving families. Animal Planet continues this tradition this year with a new set of adorable animals that are ready to tumble and fumble into their new homes across the nation. Tune in for this special two-hour event to experience all the fuzzy puppy faces from #TeamRuff and #TeamFluff who go nose to nose to win the CHEWY.COM “Lombarky” trophy at GEICO stadium. While we will be sure to keep score of touchdowns and puppy penalties, these pups playing the game are sure to go big and go home - with their new loving forever adoptive families!</p>
      <p>Content taken from the <cite><a href="https://www.animalplanet.com/tv-shows/puppy-bowl/about">Puppy Bowl About Page.</a></cite></p>

      <h1>Why the Puppy Bowl?</h1>
      <p>There are many reasons to watch the Puppy Bowl as an alternative to the Super Bowl. If you love dogs, especially puppies, this event should be a no-brainer to watch as it is two hours of non-stop dog content. It gives breed information for all the puppies, and gives relevant adoption information for those who need forever homes. More information about this can be found on the <a href="http://www.animalplanet.com/tv-shows/puppy-bowl/inside-the-bowl/pet-adoption/">Animal Planet website.</a> Additionally, the Puppy Bowl is a great alternative to play at a child-friendly Super Bowl party. It is extremely popular with both kids and adults, and can be streamed from the Animal Planet website, meaning you could play it from the beginning the second your guests arrive.</p>
    </div>
  </div>

  <div id="staff-holder">
    <div id="staff-content">
      <h2>The Referee</h2>
      <figure>
        <!-- This image is from https://www.nydailynews.com/life-style/dan-schachner-ruff-job-referee-puppy-bowl-article-1.1249716 -->
        <img src="/images/ref.jpg" alt="Dan Schachner on the Puppy Bowl field">
        <figcaption>Dan Schachner</figcaption>
      </figure>
      <p>Image from <cite><a href="https://www.nydailynews.com/life-style/dan-schachner-ruff-job-referee-puppy-bowl-article-1.1249716">NY Daily News.</a></cite></p>
    </div>
    <div id="staff-content">
      <h2>The Assistant Referee</h2>
      <figure>
        <!-- This image is from https://www.wideopenpets.com/forget-brady-foles-sloth-referee-puppy-bowl-won-super-bowl/ -->
        <img src="/images/assistantref.jpg" alt="Shirley the Sloth crawling across the Puppy Bowl field">
        <figcaption>Shirley the Sloth</figcaption>
      </figure>
      <p>Image from <cite><a href="https://www.wideopenpets.com/forget-brady-foles-sloth-referee-puppy-bowl-won-super-bowl/">Wide Open Pets.</a></cite></p>
    </div>
    <div id="staff-content">
      <h2>Team Ruff's Mascots</h2>
      <figure>
        <!-- This image is screencaptured from https://www.animalplanet.com/tv-shows/puppy-bowl/full-episodes/puppy-bowl-xv-winner-takes-all -->
        <img src="/images/porcupine.png" alt="The baby porcupines scurrying along the sidelines">
        <figcaption>The Baby Porcupines</figcaption>
      </figure>
      <p>Image screencaptured from the <cite><a href="https://www.animalplanet.com/tv-shows/puppy-bowl/full-episodes/puppy-bowl-xv-winner-takes-all">Puppy Bowl Broadcast.</a></cite></p>
    </div>
    <div id="staff-content">
      <h2>Team Fluff's Mascot</h2>
      <figure>
        <!-- This image is screencaptured from https://www.animalplanet.com/tv-shows/puppy-bowl/full-episodes/puppy-bowl-xv-winner-takes-all -->
        <img src="/images/capybara.png" alt="Javier the Capybara drinking from a bowl">
        <figcaption>Javier the Capybara</figcaption>
      </figure>
      <p>Image screencaptured from the <cite><a href="https://www.animalplanet.com/tv-shows/puppy-bowl/full-episodes/puppy-bowl-xv-winner-takes-all">Puppy Bowl Broadcast.</a></cite></p>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
