<?php 
get_header();
?>
<?php
$projectName = get_field('projectName');
$projectDescription = get_field('projectDescription');
$quickInfo = get_field('quickInfo');
$link = $quickInfo['profNetwork'];
?>
    <main class="mainAkce">
        <div class="mainContainer">
            <article>
                <h1>
                <?php echo $projectName ?>
                </h1>
                <!--articleText-->
                <?php echo $projectDescription ?>
            </article>
            <aside>
                <h2>quick info</h2>
                <div class="sideText">
                    <p class="category">Název:</p>
                    <p class="info"><?php echo $quickInfo['eventName']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Krátký popis:</p>
                    <p class="info"><?php echo $quickInfo['shortDescription']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Kontaktní osoba:</p>
                    <p class="info"><?php echo $quickInfo['contact']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Webové stránky/sociální sítě</p>
                    <p class="info"><?php echo $quickInfo['website']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Email:</p>
                    <p class="info"><?php echo $quickInfo['email']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Školní profesní síť:</p>
                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><p><?php echo $link['title']; ?></p></a> 
                </div>
            </aside>
        </div>
    </main>
    <?php
    get_footer();
    ?>