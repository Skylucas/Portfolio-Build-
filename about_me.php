<?php

require_once 'querys_admin.php';
require_once 'database_form.php';

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" type="text/css" href="about_me.css">
    <meta charset="UTF-8">
    <title>Daniel Coombes</title>
</head>
<body>
<nav>
    <img src="Images/ying_yang.png" />
    <section class="container">
        <a href="index.php">Home</a>
        <a href="about_me.php">About Me</a>
        <a href="portfolio.php">Portfolio</a>
    </section>
</nav>

<main>
    <div class="fantasy">
        <section class="container2">
            <article class="mid-2">
                <h2>- About Me -</h2>
                <p><?php echo $content; ?></p>
            </article>
            <article class="mid-2">
                <h2>- Courses and Plans -</h2>
                <p>The plan is to graduate as a Full Stack Developer from this course and get a job in this industry. </p>
            </article>
        </section>
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
