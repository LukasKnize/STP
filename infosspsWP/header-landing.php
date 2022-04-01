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
    $backgroundImage = get_template_directory_uri().'/assets/images/alvaro-serrano-hjwKMkehBco-unsplash.jpg';
    ?>
    <header class="headerLanding" style="background-image: url('<?php echo $backgroundImage ?>');">
        <div class="headerBody">
            <nav>
                <a href="https://stp-vlach-knize.cajthaml.eu/"><img src="<?php echo get_template_directory_uri().'/assets/images/logoWhite.png' ?>" alt="info SSPŠ logo"></a>
                <div class="headerLinks">
                    <a href="https://stp-vlach-knize.cajthaml.eu/akce/" class="headerlink">AKCE</a>
                    <a href="https://stp-vlach-knize.cajthaml.eu/ucitele/" class="headerlink">UČITELÉ</a>
                    <a href="https://stp-vlach-knize.cajthaml.eu/systemy/" class="headerlink">SYSTÉMY</a>
                    <a href="https://stp-vlach-knize.cajthaml.eu/skola/" class="headerlink">O ŠKOLE</a>
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
                    <a href="https://stp-vlach-knize.cajthaml.eu/menu-akce/" class="headerlink">AKCE</a>
                    <br>
                    <a href="https://stp-vlach-knize.cajthaml.eu/ucitele/" class="headerlink">UČITELÉ</a>
                    <br>
                    <a href="https://stp-vlach-knize.cajthaml.eu/systemy/" class="headerlink">SYSTÉMY</a>
                    <br>
                    <a href="https://stp-vlach-knize.cajthaml.eu/o-skole/" class="headerlink">O ŠKOLE</a>
                </div>
            </div>
        </div>
    </header>