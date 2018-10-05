<?php
require_once 'portfolio_results.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <meta charset="UTF-8">
    <title>Daniel Coombes</title>
</head>
<body>
    <nav>
        <img src="Images/ying_yang.png" />
        <section class="container">
            <a href="index.html">Home</a>
            <a href="about_me.php">About Me</a>
            <a href="portfolio.php">Portfolio</a>
        </section>
    </nav>

    <main>
        <div class="fantasy">
            <section class="container2">
                <article class="mid-2">
                    <h2>- Portfolio -</h2>
                    <p>
                        Here is a list of all the Projects I will be working on and will complete.
                    </p>
                </article>
            </section>
        <div class="moving_box">
            <h3>Projects Below &#8595;</h3>
        </div>
        <div class="container3">
            <div class="col-4">
            </div>
                    <?php echo $content; ?>
        </div>
    </main>

    <div>
        <div class="icons_menu">
            <div id="icons">
                <ul id="iconlinks">
                    <li>
                        <a href="https://github.com/Skylucas">
                            <img src="Images/github.png" />
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Daniel16704467">
                            <img src="Images/twitter_logo.png" />
                        </a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/">
                            <img src="Images/gmail_logo.png" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>