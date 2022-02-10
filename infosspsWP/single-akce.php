<?php 
get_header();
?>
<?php
$eventTitle = get_field('eventTitle');
$eventDescription = get_field('eventDescription');
$quickInfo = get_field('quickInfo');
?>
    <main class="mainAkce">
        <div class="mainContainer">
            <article>
                <h1>
                <?php echo $eventTitle ?>
                </h1>
                <!--articleText-->
                <?php echo $eventDescription ?>
            </article>
            <aside>
                <h2>quick info</h2>
                <div class="sideText">
                    <p class="category">Název:</p>
                    <p class="info"><?php echo $quickInfo['eventName']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Krátký popis:</p>
                    <p class="info"><?php echo $quickInfo['eventDescriptionShort']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Koordinátor akce:</p>
                    <p class="info"><?php echo $quickInfo['eventCoordinator']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Datum konání:</p>
                    <p class="info"><?php echo $quickInfo['eventDate']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Místo konání:</p>
                    <p class="info"><?php echo $quickInfo['eventLocation']; ?></p>
                </div>
                <div class="sideText">
                    <p class="category">Koho se akce týká:</p>
                    <p class="info"><?php echo $quickInfo['eventTarget']; ?></p>
                </div>
            </aside>
        </div>
    </main>
    <?php
    get_footer();
    ?>