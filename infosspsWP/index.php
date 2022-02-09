<?php 
get_header('landing');
?>
<?php 
    $news = get_field('news');
    $new1;
    $new2;
    $new3;
    $new4;
    try {
       $new1 = $news['new1'];
       $new2 = $news['new2'];
       $new3 = $news['new3'];
       $new4 = $news['new4'];
    } catch (\Throwable $th) {
        //throw $th;
    }
    ?>
    <main class="mainLanding">
        <div id="importantInfo">
            <h2>Aktuality</h2>
            <div class="importantInfoHolder">
                <div class="importantInfoContainer" id="LineBorder">
                    <div class="InfoContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/report_problem_black_24dp.svg' ?>" alt="">
                        <div class="importantInfoText">
                            <h4><?php echo $new1['newsTitle']; ?></h4>
                            <p><?php echo $new1['newsText']; ?></p>
                        </div>
                    </div>
                    <div class="InfoContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/report_problem_black_24dp.svg' ?>" alt="">
                        <div class="importantInfoText">
                            <h4><?php echo $new2['newsTitle']; ?></h4>
                            <p><?php echo $new2['newsText']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="importantInfoContainer">
                    <div class="InfoContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/report_problem_black_24dp.svg' ?>" alt="">
                        <div class="importantInfoText">
                            <h4><?php echo $new3['newsTitle']; ?></h4>
                            <p><?php echo $new3['newsText']; ?></p>
                        </div>
                    </div>
                    <div class="InfoContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/report_problem_black_24dp.svg' ?>" alt="">
                        <div class="importantInfoText">
                            <h4><?php echo $new4['newsTitle']; ?></h4>
                            <p><?php echo $new4['newsText']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quickMenu">
            <div class="quickMenuContainer">
                <a href="./pageForm.html">
                    <div class="menuItem">
                        <div class="iconContainer">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/account_balance_black_24dp.svg' ?>" alt="">
                        </div>
                        <p>ŠKOLA</p>
                    </div>
                </a>
                <a href="./teachersMenu.html">
                <div class="menuItem">
                    <div class="iconContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/school_black_24dp.svg' ?>" alt="">
                    </div>
                    <p>UČITELÉ</p>
                </div>
            </a>
            <a href="./akceMenu.html">
                <div class="menuItem">
                    <div class="iconContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/event_black_24dp.svg' ?>" alt="">
                    </div>
                    <p>AKCE</p>
                </div>
            </a>
            <a href="./systemy.html">
                <div class="menuItem">
                    <div class="iconContainer">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/cast_for_education_black_24dp.svg' ?>" alt="">
                    </div>
                    <p>SYSTÉMY</p>
                </div>
            </a>
            </div>
        </div>
    </main>
    <?php
    get_footer();
    ?>
