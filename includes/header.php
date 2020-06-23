<header>
    <?php
        $navpages = [['index.php', 'Home'],['about.php', 'About'],['puppies.php', 'Puppies'],['contact.php', 'Contact Us']];
        $current_file = basename($_SERVER['PHP_SELF']);
    ?>

    <div id = "navdivholder">
        <!-- This image is from "https://www.facebook.com/PuppyBowl/photos/a.456115511391/10157066444791392/?type=3&theater"-->
        <div id="navdiv1">
            <a href="index.php">
                <img src="/images/pblogoxv.png" alt="Puppy Bowl Logo">
            </a>
        </div>
        <div id = "navdiv2">
            <nav id="nav">
                <ul>
                    <?php foreach($navpages as $page) {
                        if ($page[0] == $current_file) {
                            echo "<li class=\"current\"><a href=\"".$page[0]."\">".$page[1]."</a></li>";
                        }
                        else {
                            echo "<li><a href=\"".$page[0]."\">".$page[1]."</a></li>";
                        }
                    } ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
