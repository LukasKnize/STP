<?php 
get_header();
?>
<?php
$platformName = get_field('platformName');
$description = get_field('description');
$info = get_field('info');
$link = $info['platformLink'];
?>
    <main class="mainAkce">
        <div class="mainContainer">
            <article>
                <h1>
                <?php echo $platformName ?>
                </h1>
                <!--articleText-->
                <?php echo $description ?>
            </article>
            <aside>
                <h2>quick info</h2>
                <div class="sideText">
                    <p class="category">Název:</p>
                    <p class="info"><?php echo $info['platformName']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Krátký popis:</p>
                    <p class="info"><?php echo $info['shortDescription']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Správce:</p>
                    <p class="info"><?php echo $info['systemAdmin']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Odkaz:</p>
                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><p><?php echo $link['title']; ?></p></a> 
                </div>
            </aside>
        </div>
    </main>
    <?php
    get_footer();
    ?>