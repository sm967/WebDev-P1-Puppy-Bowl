<?php
    include("includes/init.php");
    $title = "Contact Us";
    $nav_contact = "current";

    $hidden = "form-error hidden";
    $unhidden = "form-error";
    $valid_name = true;
    $valid_email = true;
    $name = '';
    $email = '';
    $listserv;
    $message = '';

    if (isset($_POST['submit'])) {
        $valid_form = true;
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        if (isset($_POST['listserv'])) {
          $listserv = htmlspecialchars($_POST['listserv']);
        }
        $message = htmlspecialchars($_POST['message']);
        if ($name === '') {
            $valid_name = false;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $valid_email = true;
        }
        else {
            $valid_email = false;
        }
        if ($valid_name == false || $valid_email == false) {
            $valid_form = false;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <title>Contact Us</title>
</head>

<body>
  <?php include("includes/header.php"); ?>

  <?php
        if (isset($valid_form) && $valid_form) { ?>
        <div class="confirmation">
          <h2>Thanks for contacting us, <?php echo $name; ?>!</h2>
          <h3>The email you provided is <?php echo $email; ?></h3>
          <?php if (isset($_POST['listserv'])) { echo "We will contact you via your email next Puppy Bowl season!"; } else { echo "We will not use your email to contact you further."; } ?>
          <p>Your message: <?php echo $message; ?></p>
        </div>
    <?php } else { ?>

  <div id="contact-form">
    <h1>Contact Us</h1>
    <h3>If you would like to contact us regarding the content of our website, please do so using this form! You can also sign up for a yearly reminder when the Puppy Bowl is approaching!</h3>

    <form id="contactform" method="post" action="contact.php" novalidate>
      <div id="name" class="form-inputs">
        <label for="user-name">Full Name:*</label>
        <input id="user-name" type="text" name="name" value="<?php echo $name; ?>"/>
        <p class=<?php if ($valid_name == false) { echo $unhidden; } else { echo $hidden; } ?>>Please enter your name.</p>
      </div>

      <div id="email" class="form-inputs">
        <label for="user-email">Email:*</label>
        <input id="user-email" type="email" name="email" value="<?php echo $email; ?>"/>
        <p class=<?php if ($valid_email == false) { echo $unhidden; } else { echo $hidden; } ?>>Please provide a valid email address.</p>
      </div>

      <div class="form-inputs">
        <input type="checkbox" name="listserv" <?php if ( isset($listserv) ) { echo 'checked'; }?>>Want an email reminder when the Puppy Bowl is coming up?
      </div>

      <div class="form-inputs">
        <label for="message">Message:</label>
        <textarea id="message" name="message" ><?php echo $message; ?></textarea>
      </div>

      <div>
        <input id="submitbutton" type="submit" name="submit" value="submit"/>
      </div>
    </form>
  </div>
  <?php } ?>
  <?php include("includes/footer.php"); ?>
</body>
</html>
