<?php
/* 
Template Name: o škole
*/

get_header();
?>          
    <main class="mainAkceMenu">
        <div class="mainContainer">
            <h1>
                Menu akcí
            </h1>
            <div class="MainContentItem menuHeadline">
                <p class="headerItemName">Článek</p>
                <p class="itemDate">Datum</p>
                <p class="itemDescription">Popis</p>
            </div>
            <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'post' ),
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
                //remove_filter('the_content','wpautop');
                ?>
                
            <div class="MainContentItem">
                <a class="itemName" href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
                </a>
                <p class="itemDate"><?php echo get_the_date(); ?></p>
                <p class="itemDescription"><?php echo get_the_content(); ?></p>
            </div>
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
        </div>
    </main>

<?php
    get_footer();
    ?>
