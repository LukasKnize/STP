<footer>
        <div class="footerContent">
            <div class="footerLinks">
                <h3>Odkazy</h3>
                <a href="https://www.ssps.cz/" target="_blank" class="footerlink">Web školy</a>
                <br>
                <a href="#" class="footerlink">Kontakty</a>
                <br>
                <a href="https://stp-vlach-knize.cajthaml.eu/menu-akce/" class="footerlink">Aktuality</a>
                <br>
                <a href="#" class="footerlink">Podmínky používání</a>
                <br>
                <a href="https://www.presloviny.cz/" class="footerlink">Presloviny</a>
            </div>
            <div class="Footerprojects">
                <h3>Projekty</h3>
                <div class="projectCarousel">
                <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'project' ),
            'post_status'    => array( 'publish' ),
        );

        // The Query
        $post_query = new WP_Query( $args );

        if ( $post_query->have_posts() ) : ?>
            <?php
            // Start the Loop.
            while ( $post_query->have_posts() ) :
                // You can list your posts here
                $post_query->the_post();
                $quickInfo = get_field('quickInfo');
                $logo = $quickInfo['logo'];
                ?>
                    <a href="<?php the_permalink(); ?>" target="_blank" class="footerCarousel">
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="" class="projectImg">
                    </a>
                    <?php
            endwhile;

            // Navigation
            the_post_navigation();
        else :
            // No Post Found
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
                    <div class="progressBar">
                        <div class="progressFiller"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerCopyright">
            <p id="CopyrightText">2021 © Smíchovská střední průmyslová škola a gymnázium</p>
            <p>Code & Design by <a href=""><b>Lukáš Kníže</b></a> a <a href=""><b>Maxmilián Vlach</b></a></p>
        </div>
    </footer>
    <?php
        wp_footer();
    ?>
</body>

</html>