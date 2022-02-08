<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO_SSPŠaG</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<?php
wp_head();
?>

</head>

<body>
    <?php 
    $landingPageHeader = get_field('landingPageHeader');
    ?>
    <header class="headerLanding">
        <div class="headerBody">
            <nav>
                <a href="./landingPage.html"><img src="./assets/images/logoWhite.png" alt=""></a>
                <div class="headerLinks">
                    <a href="./akceMenu.html" class="headerlink">AKCE</a>
                    <a href="./teachersMenu.html" class="headerlink">UČITELÉ</a>
                    <a href="./systemy.html" class="headerlink">SYSTÉMY</a>
                    <a href="./pageForm.html" class="headerlink">O ŠKOLE</a>
                    <i class="fas fa-bars mobileMenuButton" id="openMenu"></i>
                </div>
            </nav>

            <h1><?php echo $landingPageHeader['welcomingTextMain']; ?></h1>
            <p><?php echo $landingPageHeader['welcomingText']; ?></p>
            <a href="#importantInfo"><i class="fas fa-chevron-down downArrow"></i></a>
        </div>
        <div class="menuForMobileBackground" id="menuForMobileBackground">
            <div class="menuForMobile">
                <div class="mobileMenuHeader">
                    <i class="fas fa-times" id="closeMenu"></i>
                </div>
                <div class="mobileMenuLinks">
                    <a href="./akceMenu.html" class="headerlink">AKCE</a>
                    <br>
                    <a href="./teachersMenu.html" class="headerlink">UČITELÉ</a>
                    <br>
                    <a href="./systemy.html" class="headerlink">SYSTÉMY</a>
                    <br>
                    <a href="./systemy.html" class="headerlink">O ŠKOLE</a>
                </div>
            </div>
        </div>
    </header>