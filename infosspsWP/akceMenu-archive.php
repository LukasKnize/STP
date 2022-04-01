<?php
/* 
Template Name: AkceMenu
*/

get_header();
?>          
    <main class="mainAkceMenu">
        <div class="mainContainer">
            <h1>
                Menu akcí
            </h1>
            <div class="MainContentItem menuHeadline">
                <p class="headerItemName">Aktualita</p>
                <p class="itemDate">Datum</p>
                <p class="itemDescription">Popis</p>
            </div>
            <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'akce' ),
            'post_status'    => array( 'publish' ),
            'posts_per_page' => '-1',
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
                ?>
                
            <div class="MainContentItem">
                <a class="itemName" href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
                </a>
                <p class="itemDate"><?php echo get_the_date(); ?></p>
                <p class="itemDescription"><?php echo $quickInfo['eventDescriptionShort']; ?></p>
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
